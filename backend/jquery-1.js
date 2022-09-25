

    function Chart(parent, serverTime) {
        this.candles = [];
        this.orders = [];
        this.toOrdersClosed = [];
        this.ordersClosed = {};
        this.parent = parent;
        this.pricePy = 0;
        this.priceOffset = 0;
        this.candleWidthTo = 9;
        this.candlesFreeSpaceTo = 3;
        this.candleWidth = 9;
        this.candlesFreeSpace = 3;
        this.candlesOffset = 0;
        this.speed = 0;
        this.blur = 10;
        this.blurPlus = true;
        this.lWheel = serverTime.now();
        this.toClick = [];
        this.click = [];
        this.serverTime = serverTime;
        this.now = serverTime.now();
        this.lastDrag = Date.now();
    }
    //Chart.prototype.remove = function () {
    //    if(this.bgCanvas) {
    //        this.parent.removeChild(this.bgCanvas);
    //        this.bgCanvas.remove();
    //    }
    //    if(this.mainCanvas) {
    //        this.parent.removeChild(this.mainCanvas);
    //        this.mainCanvas.remove();
    //    }
    //    if(this.frontCanvas) {
    //        this.parent.removeChild(this.frontCanvas);
    //        this.frontCanvas.remove();
    //    }
    //};
    Chart.prototype.init = function () {
        this.bgCanvas = document.createElement("canvas");
        this.mainCanvas = document.createElement("canvas");
        this.frontCanvas = document.createElement("canvas");
        this.bgCanvas.className = 'ct-chart ct-chart-bg';
        this.mainCanvas.className = 'ct-chart ct-chart-main';
        this.frontCanvas.className = 'ct-chart ct-chart-front';
        this.parent.appendChild(this.bgCanvas);
        this.parent.appendChild(this.mainCanvas);
        this.parent.appendChild(this.frontCanvas);
        this.mainCanvas.style.zIndex = 100;

        this.bgCanvas.width = this.parent.clientWidth;
        this.mainCanvas.width = this.parent.clientWidth;
        this.frontCanvas.width = this.parent.clientWidth;

        this.bgCanvas.height = this.parent.clientHeight;
        this.mainCanvas.height = this.parent.clientHeight;
        this.frontCanvas.height = this.parent.clientHeight;


        this.mainCanvasCtx = this.mainCanvas.getContext("2d");

        this.candlesPerPage = Math.ceil(this.mainCanvas.clientWidth / (this.candlesFreeSpace * 2 + this.candleWidth));
        this.height = this.parent.clientHeight;
        this.width = this.parent.clientWidth;

        this.mousePosPrice = new PriceLine(this.mainCanvasCtx, this);
        this.mousePosTime = new TimeLine(this.mainCanvasCtx, this);
        var $this = this;
        this.offset = 0;


        this.clientWidth = this.mainCanvas.clientWidth;
        this.clientHeight = this.mainCanvas.clientHeight;

        this.config = {
            chart: {
                bg: '#1F232E',
                linear: {
                    color: '#02B6F2',
                    bg: ['#1D506B','#1F2834'],
                    point: {
                        bg: '#FFFFFF',
                        shadow: '#556E78'
                    }
                }
            },
            timeLine: {
                bg: '#1F232E',
                line: {
                    color: '#728C96',
                    lineDash: [4, 1]
                },
                text: {
                    color: '#728B96',
                    font: "12px Arial",
                    format: 'HH:mm:ss'
                },
            },
            priceLine: {
                line: {
                    color: '#728C96',
                    lineDash: [4, 1]
                },
                text: {
                    color: '#728C96',
                    font: '15px Arial'
                }
            },
            currentTime: {
                line: {
                    color: '#3B4359',
                },
                text: {
                    format: 'HH:mm:ss',
                    bg: '#3B4359',
                    font: "12px Arial",
                    color: '#F7F7F8'
                }
            },
            currentPrice: {
                bg: '#F74A5C',
                line: {
                    color: '#F74A5C',
                },
                text: {
                    font: "12px Arial",
                    color: '#fff'
                }
            },
            mousePos: {
                bg: '#3B4359'
            },
            clock: {
                color: '#7F9CA7',
                font: "20px Arial",
                format: 'mm:ss'
            },
            order: {
                call: {
                    color: '#6CA924'
                },
                put: {
                    color: '#F74A5C'
                },
                lineDash: [4, 1],
                font: '12px Arial',
                price: {
                    font:'bold 12px Arial'
                },
                time: {
                    font: '12px Arial',
                    format: 'HH:mm:ss'
                }
            },
            imageDed: {
                text: 'Time expiration',
                textPosX: -10,
                textPosY: 17,
                color: "#A63947",
                font: "15px Arial"
            },
            imageEnd: {
                text: 'Time expiration',
                textPosX: -10,
                textPosY: 17,
                color: "#A63947",
                font: "13px Arial"
            },
            endLine: {
                lineStyle: "#990F14",
                lineDash: [4, 1]
            }
        }


        this.imageDed = new Image();
        this.imageEnd = new Image();
        {
            var bufCanvas = document.createElement("canvas");
            bufCanvas.height = 200;

            var buf = bufCanvas.getContext("2d");

            buf.save();
            buf.rotate(3 * Math.PI / 2);
            buf.font = this.config.imageDed.font;
            buf.fillStyle = this.config.imageDed.color;
            buf.textAlign = "right";
            buf.fillText(this.config.imageDed.text, this.config.imageDed.textPosX, this.config.imageDed.textPosY);
            this.imageDed.src = bufCanvas.toDataURL();
            buf.restore();


            buf.save();
            //buf.rotate(-3 * Math.PI / 2);
            buf.clearRect(-1, -1, bufCanvas.height + 2, bufCanvas.width + 2);
            buf.restore();


            buf.save();
            buf.rotate(3 * Math.PI / 2);

            //buf.clearRect(0, 0, bufCanvas.width, bufCanvas.height);
            //buf.clearRect(-200, -200, 300, 300);
            //buf.rotate(3 * Math.PI / 2);

            buf.font = this.config.imageEnd.font;

            buf.fillStyle = this.config.imageEnd.color;
            buf.textAlign = "right";
            buf.fillText(this.config.imageEnd.text, this.config.imageEnd.textPosX, this.config.imageEnd.textPosY);
            this.imageEnd.src = bufCanvas.toDataURL();
            buf.restore();
            bufCanvas.remove();
        }

        this.endLine = new EndLine(this.mainCanvasCtx, this, {
            lineStyle: this.config.endLine.lineStyle,
            lineDash: this.config.endLine.lineDash,
            lineName: this.imageEnd,
            displayTime: false
        });


        this.scrollOn = false;
        this.mainCanvas.onmousedown = function (e) {
            var evt = e || event;
            $this.dragging = true;
            $this.lastX = evt.offsetX;
            $this.offset = 0;
            $this.translateTime = $this.now;
            $this.translateTo = 0;
            if (window.getSelection) {
                if (window.getSelection().empty) {  // Chrome
                    window.getSelection().empty();
                } else if (window.getSelection().removeAllRanges) {  // Firefox
                    window.getSelection().removeAllRanges();
                }
            } else if (document.selection) {  // IE?
                document.selection.empty();
            }
        };

        this.mainCanvas.onclick = function (e) {
            $this.scrollOn = true;
            for (var i = 0; i < $this.click.length; i++) {
                var ob = $this.click[i];
                if (
                        ob.xs <= e.offsetX && e.offsetX <= ob.xe
                        && ob.ys <= e.offsetY && e.offsetY <= ob.ye
                ) {
                    ob.fn();
                }
            }
        };

        this.mainCanvas.onmousemove = function (e) {
            var evt = e || event;
            $this.mouseX = evt.offsetX;
            $this.mouseY = evt.offsetY;
            $this.lastDrag = $this.now;
            if ($this.dragging) {
                var delta = evt.offsetX - $this.lastX;
                $this.lastX = evt.offsetX;
                $this.scrollX(delta);
                $this.translateTo += delta;
            }
        };

        this.mainCanvas.onmouseup = function () {
            if ($this.dragging) {
                $this.speed = Math.round(1000 * $this.translateTo / Math.pow($this.now - $this.translateTime, 2));
            }
            $this.dragging = false;
        };
        this.mainCanvas.onmouseleave = function () {
            $this.dragging = false;
            $this.scrollOn = false;
        };


        var onWheel = function (e) {
            e = e || window.event;
            if (!$this.scrollOn) {
                return;
            }
            var delta = e.deltaY || e.detail || e.wheelDelta;
            var mov = 1;
            if ($this.now - $this.lWheel < 1000) {
                mov = Math.round(1000 / ($this.now - $this.lWheel));
                if (mov > 5) {
                    mov = 5;
                }
            }
            $this.lWheel = $this.now;
            if (delta > 0) {
                $this.candleWidthTo -= mov;
                if ($this.candleWidthTo <= 0) {
                    $this.candleWidthTo = 1;
                }
            } else if (delta < 0) {
                $this.candleWidthTo += mov;
            }
            $this.candlesFreeSpaceTo = Math.round($this.candleWidthTo / 3);
            if ($this.candlesFreeSpaceTo < 1) {
                $this.candlesFreeSpaceTo = 1;
            }
            if ($this.candlesFreeSpaceTo > 3) {
                $this.candlesFreeSpaceTo = 3;
            }
            e.preventDefault ? e.preventDefault() : (e.returnValue = false);
        };

        if (this.mainCanvas.addEventListener) {
            if ('onwheel' in document) {
                // IE9+, FF17+, Ch31+
                this.mainCanvas.addEventListener("wheel", onWheel);
            } else if ('onmousewheel' in document) {
                // устаревший вариант события
                this.mainCanvas.addEventListener("mousewheel", onWheel);
            } else {
                // Firefox < 17
                this.mainCanvas.addEventListener("MozMousePixelScroll", onWheel);
            }
        } else { // IE8-
            this.mainCanvas.attachEvent("onmousewheel", onWheel);
        }
    };
    Chart.prototype.scrollX = function (delta) {
        var $this = this;
        $this.offset += delta;
        if (Math.abs($this.offset) >= $this.candleWidth + $this.candlesFreeSpace * 2) {
            var movCandle = Math.floor($this.offset / ($this.candleWidth + $this.candlesFreeSpace * 2));
            if ($this.candlesOffset + movCandle < 2) {
                $this.offset -= delta;
                return;
            }
            if ($this.candlesOffset + movCandle >= $this.candles.length) {
                $this.offset -= delta;
                return;
            }

            $this.candlesOffset += movCandle;
            $this.offset -= movCandle * ($this.candleWidth + $this.candlesFreeSpace * 2);
        }
    };
    Chart.prototype.getX = function (time) {
        if (!this.candlesShow || this.candlesShow.length == 0) {
            return 0;
        }
        var ss = 0;
        var s = this.candlesShow.length / 2;
        var sl = this.candlesShow.length - 1;
        for (var i = 0; i < this.candlesShow.length; i++) {
            var candle = this.candlesShow[Math.round(s)];
            if (!candle && Math.round(s) === 1) {
                s = 0;
                continue;
            }
            if (candle.timeId + 1000 > time && time >= candle.timeId) {
                return candle.posX;
            } else if (time < candle.timeId) {
                sl = s;
                s = ss + (sl - ss) / 2;
            } else if (time > candle.timeId) {
                ss = s;
                s = ss + (sl - ss) / 2;
            }
        }
        var lc = this.candlesShow[this.candlesShow.length - 1];
        if (lc.timeId < time) {
            return this.lastPosX + (this.candleWidth + this.candlesFreeSpace * 2) / 1000 * (time - this.now);
        }
        return 0;
    };
    Chart.prototype.getY = function (price) {
        return this.height - (price * this.pricePy - this.priceOffset);
    };
    Chart.prototype.getPrice = function (y) {
        return (this.height - y + this.priceOffset) / this.pricePy;
    };
    Chart.prototype.getTime = function (x) {
        if (!this.candlesShow || this.candlesShow.length == 0) {
            return this.now;
        }
        var zone = this.candleWidth / 2 + this.candlesFreeSpace;
        var ss = 0;
        var s = Math.round(this.candlesShow.length / 2);
        var sl = this.candlesShow.length - 1;
        for (var i = 0; i < this.candlesShow.length; i++) {
            var candle = this.candlesShow[Math.round(s)];
            if (!candle && Math.round(s) === 1) {
                s = 0;
                continue;
            }
            if (candle.posX + zone >= x && x >= candle.posX - zone) {
                return candle.timeId;
            } else if (x < candle.posX) {
                sl = s;
                s = ss + Math.round((sl - ss) / 2);
            } else if (x > candle.posX) {
                ss = s;
                s = ss + Math.round((sl - ss) / 2);
            }
        }
        var lc = this.candlesShow[this.candlesShow.length - 1];
        if (lc.posX < x) {
            //var dd = x - (lc.posX + this.candleWidth + this.candlesFreeSpace * 2);
            var dd = x - this.lastPosX;
            return this.now + 1000 * dd / (this.candleWidth + this.candlesFreeSpace * 2);
        }
    };

    Chart.prototype.animate = function () {
        this.now = this.serverTime.now();

        if (!this.mainCanvasCtx) {
            return;
        }
        if (this.preparedOrder.symbol === "TRADE_OFF") {
            return;
        }

        this.candlesFreeSpace += (this.candlesFreeSpaceTo - this.candlesFreeSpace) / 5;
        this.candleWidth += (this.candleWidthTo - this.candleWidth) / 5;
        this.candlesPerPage = Math.ceil(this.clientWidth / (this.candlesFreeSpace * 2 + this.candleWidth));

        //this.timePx = this.mainCanvas.clientWidth / this.timeWidth;
        var candle = this.candles[0];
        var timeRR = Math.floor(this.now / 1000) * 1000;
        if (candle && candle.timeId < timeRR) {
            var candle2 = new Candle(timeRR, candle.close, candle.close, candle.close, candle.close, true);
            candle2.closeTo = candle2.close;
            candle2.openTo = candle2.open;
            candle2.minTo = candle2.min;
            candle2.maxTo = candle2.max;
            candle2.animation = 120;
            this.addCandles(candle2);
        }
        this.mainCanvasCtx.clearRect(0, 0, this.width, this.height);

        this.drawPrices();
        this.drawTimes();
        this.drawCandles();

        if (this.preparedOrder && this.preparedOrder.timeFrame && (!this.preparedOrder.optionEnd || this.now >= this.preparedOrder.optionEnd)) {
            //if(!this.optionEnd) {
            this.preparedOrder.optionOff = this.now + this.preparedOrder.timeFrame;
            this.preparedOrder.optionOff = Math.round(this.preparedOrder.optionOff / 1000) * 1000;
            this.preparedOrder.optionEnd = Math.round(this.now + this.preparedOrder.timeFrame - this.preparedOrder.timeOff);
            this.preparedOrder.optionEnd = Math.round(this.preparedOrder.optionEnd / 1000) * 1000;
        }

        this.endLine.draw(this.preparedOrder.optionEnd);

        var text = moment(this.preparedOrder.optionEnd - Date.now()).utc().format(this.config.clock.format);
        this.mainCanvasCtx.font = this.config.clock.font;
        var w1 = this.mainCanvasCtx.measureText(text).width;
        this.mainCanvasCtx.fillStyle = this.config.chart.bg;

        this.mainCanvasCtx.fillRect(this.width / 2 - 2 - w1 / 2, 0, w1, 30);

        this.mainCanvasCtx.beginPath();
        this.mainCanvasCtx.fillStyle = this.config.clock.color;
        this.mainCanvasCtx.textAlign = "center";
        this.mainCanvasCtx.fillText(text, this.width / 2 - 2, 30);

        var orderBuf = [];
        var order = this.orders.pop();
        var closedOrd = [];
        while (order) {
            if (this.now < order.endTime) {
                orderBuf.unshift(order);
                var color;
                if (order.call) {
                    color = this.config.order.call.color;
                } else {
                    color = this.config.order.put.color;
                }
                new EndLine(this.mainCanvasCtx, this, {
                    lineStyle: color,
                    bgStyle: this.config.timeLine.bg,
                    lineDash: this.config.order.lineDash,
                }).draw(order.endTime, order.openPrice.toFixed(5), order.call, order.startTime, order.endTime, order.amount.toFixed(2) + ' ' + order.currency);
            } else {
                closedOrd.push(order);
            }
            order = this.orders.pop();
        }
        if (closedOrd.length > 0) {
            var cp = this.candles[0];
            order = closedOrd.pop();
            var win = 0;
            while (order) {
                if (order.call && order.openPrice < cp.close) {
                    win += 9;
                } else if (!order.call && order.openPrice > cp.close) {
                    win += 9;
                } else if (order.openPrice === cp.close) {
                    win += 0;
                } else {
                    win -= 10;
                }
                order = closedOrd.pop();
            }
            var e1 = document.getElementById("chart-holder");

            var e2 = document.getElementById("win_amt");
            e2.innerHTML = win;

            if (win >= 0) {
                e1.className += ' deal-finished';
            } else {
                e1.className += ' deal-finished loose';
            }
        }

        order = this.toOrdersClosed.pop();
        while (order) {
            this.ordersClosed[order.endTime].count++;
            this.ordersClosed[order.endTime].amount += order.profit;
            order = this.toOrdersClosed.pop();
        }
        for (var orderId in this.ordersClosed) {
            if (this.ordersClosed.hasOwnProperty(orderId)) {
                this.ordersClosed[orderId].draw();
            }
        }

        this.orders = orderBuf;

        this.mousePosPrice.draw(candle.close, this.getY(candle.close), this.config.currentPrice.bg);

        if (this.mouseY > 10 && this.mouseY < this.height - 10 && this.mouseX > 10 && this.mouseX < this.width - 10) {
            this.mousePosPrice.draw(this.getPrice(this.mouseY), this.mouseY, this.config.mousePos.bg);
            this.mousePosTime.draw(this.getTime(this.mouseX));
        }
        if (!this.dragging && Math.abs(this.speed) > 2) {
            this.speed -= this.speed / 20;
            this.scrollX(this.speed);
        }

        this.click = this.toClick;
        this.toClick = [];
    };
    Chart.prototype.drawPrices = function () {
        var ctx = this.mainCanvasCtx;
        ctx.save();
        var step = 75;
        ctx.font = this.config.priceLine.text.font;
        for (var py = step; py < this.height; py += step) {
            ctx.beginPath();
            ctx.moveTo(0, py);
            ctx.lineTo(this.width, py);
            ctx.strokeStyle = this.config.priceLine.line.color;
            ctx.lineWidth = 1;
            ctx.setLineDash(this.config.priceLine.line.lineDash);
            ctx.stroke();
            ctx.beginPath();
            ctx.fillStyle = this.config.priceLine.text.color;
            ctx.textAlign = "right";
            ctx.fillText(this.getPrice(py).toFixed(5), this.width - 10, py - 5);
        }
        ctx.restore();
    };
    Chart.prototype.drawTimes = function () {
        var ctx = this.mainCanvasCtx;
        var step = 75;
        ctx.save();
        ctx.fillStyle = this.config.timeLine.bg;
        ctx.moveTo(0, this.height);
        ctx.lineTo(0, this.height - 20);
        ctx.lineTo(this.width, this.height - 20);
        ctx.lineTo(this.width, this.height);
        ctx.lineTo(0, this.height);
        ctx.fill();

        for (var px = step; px < this.width; px += step) {
            ctx.beginPath();
            ctx.moveTo(px, 20);
            ctx.lineTo(px, this.height - 20);
            ctx.strokeStyle = this.config.timeLine.line.color;
            ctx.lineWidth = 1;
            ctx.setLineDash(this.config.timeLine.line.lineDash);
            ctx.stroke();
            ctx.beginPath();
            ctx.font = this.config.timeLine.text.font;
            ctx.fillStyle = this.config.timeLine.text.color;
            ctx.textAlign = "center";
            ctx.fillText(moment(this.getTime(px)).utc().format(this.config.timeLine.text.format), px, this.height - 5);
        }
        ctx.restore();
    };

    Chart.prototype.drawCandles = function () {
        if (!this.mainCanvasCtx) {
            return;
        }
        //var candles = this.candles;
        this.candlesShow = [];
        for (var ci = this.candlesOffset; ci >= this.candlesOffset - this.candlesPerPage && ci >= 0; ci--) {
            var candle2 = this.candles[ci];
            if (candle2) {
                this.candlesShow.push(candle2)
            } else {
                this.candlesShow.push(this.candles[this.candles.length - 1]);
            }
        }
        if (this.candlesShow.length == 0) {
            return;
        }

        var minPrice = this.candlesShow[0].min;
        var maxPrice = this.candlesShow[0].max;
        for (var i = 0; i < this.candlesShow.length; i++) {
            var candle = this.candlesShow[i];
            candle.draw(this.mainCanvasCtx, this, i, this.candlesShow.length);
            if (minPrice > candle.min) {
                minPrice = candle.min;
            }
            if (maxPrice < candle.max) {
                maxPrice = candle.max;
            }
        }
        var lCandle = this.candlesShow[this.candlesShow.length - 1];
        if (this.lastDrag + 2000 < this.now
                && lCandle.posX > this.width * 0.75) {
            if (this.candlesOffset < this.width / (this.candlesFreeSpace * 2 + this.candleWidth)) {
                this.lastDrag = this.now;
                this.speed -= Math.abs(lCandle.posX - this.width * 0.5) / (this.candleWidth + this.candlesFreeSpace * 2);
            } else if (this.now - this.lastDraw > 1000) {
                this.lastDrag = this.now;
                this.candlesOffset = 5;
            }
        }
        this.lastDraw = this.now;

        var dif = maxPrice - minPrice;
        if (dif == 0) {
            var split = maxPrice.toString().split('.');
            if (split.length == 2) {
                dif = Math.pow(0.1, split[1].length);
            } else {
                dif = 1;
            }
        }
        maxPrice = maxPrice + dif * 0.2;
        minPrice = minPrice - dif * 0.15;
        if (this.minPrice && this.maxPrice) {
            this.minPrice -= (this.minPrice - minPrice) / 5;
            this.maxPrice -= (this.maxPrice - maxPrice) / 5;
        } else {
            this.minPrice = minPrice;
            this.maxPrice = maxPrice;
        }
        dif = this.maxPrice - this.minPrice;


        this.pricePy = this.clientHeight / dif;
        this.priceOffset = this.minPrice * this.pricePy;
    };
    Chart.prototype.regClick = function (clickMe) {
        this.toClick.push(clickMe);
    };
    Chart.prototype.onTick = function (tick) {
        var candle = this.candles[0];
        if (candle && candle.timeId == Math.floor(tick.timeId / 1000) * 1000) {
            if (candle.fake) {
                candle.fake = false;
                candle.open = tick.avg;
                candle.openTo = tick.avg;
                candle.minTo = tick.avg;
                candle.maxTo = tick.avg;
                candle.closeTo = tick.avg;
                candle.animation = 1;
            }
            candle.animation = 1;
            candle.closeTo = tick.avg;
            if (candle.max < tick.avg) {
                candle.maxTo = tick.avg;
                candle.max = tick.avg;
            } else if (candle.min > tick.avg) {
                candle.minTo = tick.avg;
                candle.min = tick.avg;
            }
        }
    };
    Chart.prototype._addCandle = function (candle) {
        var cn;
        if (candle instanceof Candle) {
            cn = candle;
        } else {
            cn = new Candle(candle.timeId, candle.open, candle.close, candle.min, candle.max);
        }
        if (this.candles.length == 0) {
            this.candles.push(cn);
        } else if (this.candles[0].timeId < cn.timeId) {
            this.candles.unshift(cn);
            this.candlesOffset++;
        } else if (this.candles[this.candles.length - 1].timeId > cn.timeId) {
            this.candles.push(cn);
        } else {
            for (var i = 0; i < 30; i++) {
                if (this.candles[i] && this.candles[i].timeId == cn.timeId) {
                    var old = this.candles[i];

                    cn.animation = 200;
                    cn.minTo = cn.min;
                    cn.maxTo = cn.max;
                    cn.openTo = cn.open;
                    cn.closeTo = cn.close;
                    cn.close = old.close;
                    this.candles[i] = cn;
                    break;
                }
            }
        }
    };
    Chart.prototype.addCandles = function (candles) {
        var $this = this;
        if (candles instanceof Array) {
            candles.forEach(function (candle) {
                $this._addCandle(candle);
            });
        } else {
            $this._addCandle(candles);
        }
    };


    function TimeLine(ctx, chart) {
        this.ctx = ctx;
        this.chart = chart;
    }
    TimeLine.prototype.draw = function (time) {
        this.ctx.beginPath();
        this.ctx.strokeStyle = this.chart.config.currentTime.line.color;
        this.ctx.lineWidth = 1;

        this.ctx.moveTo(this.chart.mouseX, 0);
        this.ctx.lineTo(this.chart.mouseX, this.chart.height);
        this.ctx.stroke();

        this.ctx.beginPath();
        var pagging = 10;
        var height = 20;

        var text = moment(time).utc().format(this.chart.config.currentTime.text.format);
        var w1 = this.ctx.measureText(text).width;
        this.ctx.beginPath();
        this.ctx.fillStyle = this.chart.config.currentTime.text.bg;
        this.ctx.fillRect(this.chart.mouseX - w1 / 2 - pagging, this.chart.height - height, w1 + pagging + pagging, height);

        this.ctx.fillStyle = this.chart.config.currentTime.text.color;


        this.ctx.font = this.chart.config.currentTime.text.font;
        this.ctx.textAlign = "center";
        this.ctx.fillText(text, this.chart.mouseX, this.chart.height - 5);
    };

    function PriceLine(ctx, chart) {
        this.ctx = ctx;
        this.chart = chart;
    }

    PriceLine.prototype.draw = function (price, avgPx, bgColor) {
        //var avgPx = this.chart.getY(price);
        //var avgPx = this.chart.mouseY;
        this.ctx.beginPath();
        this.ctx.strokeStyle = bgColor;
        this.ctx.lineWidth = 1;
        this.ctx.moveTo(0, avgPx);
        this.ctx.lineTo(this.chart.width - 10, avgPx);
        this.ctx.stroke();

        this.ctx.moveTo(this.chart.width - 90, avgPx);
//        this.ctx.lineTo(this.chart.width - 85, avgPx + 5);
        this.ctx.lineTo(this.chart.width - 85, avgPx + 12);
        this.ctx.lineTo(this.chart.width - 10, avgPx + 12);
        this.ctx.lineTo(this.chart.width - 10, avgPx - 12);
        this.ctx.lineTo(this.chart.width - 85, avgPx - 12);
//        this.ctx.lineTo(this.chart.width - 85, avgPx - 5);
        this.ctx.fillStyle = bgColor;
        this.ctx.fill();

        this.ctx.font = this.chart.config.currentPrice.text.font;
        this.ctx.fillStyle = this.chart.config.currentPrice.text.color;
        this.ctx.textAlign = "left";
        this.ctx.fillText(price.toFixed(5), this.chart.width - 80, avgPx + 4);
    };
    function EndLine(ctx, chart, config) {
        this.ctx = ctx;
        this.chart = chart;
        if (config) {
            if (config.bgStyle) {

            }
            if (config.bgStyle) {
                this.bgStyle = config.bgStyle;
            }
            if (config.lineDash) {
                this.lineDash = config.lineDash
            }
            if (config.lineStyle) {
                this.lineStyle = config.lineStyle;
            }
            if (config.lineName) {
                this.lineName = config.lineName;
            }
            if (config.displayTime) {
                this.displayTime = config.displayTime;
            }
        }
    }
    EndLine.prototype.draw = function (time, price, call, startTime, endTime, amount) {
        this.ctx.save();
        this.ctx.beginPath();
        var timeToClose = time;
        var tVal2 = this.chart.getX(time);
        this.ctx.moveTo(tVal2, 0);
        this.ctx.lineTo(tVal2, this.chart.height - 20);
        this.ctx.strokeStyle = this.lineStyle;
        this.ctx.lineWidth = 1;
        if (this.lineDash) {
            this.ctx.setLineDash(this.lineDash);
        }

        this.ctx.stroke();
        if (this.lineName) {
            this.ctx.drawImage(this.lineName, tVal2 - 25, this.chart.height - 145);
        }

        this.ctx.beginPath();
        var number = timeToClose - this.chart.now;
        if (number < 0) {
            number = 0;
        }

        this.ctx.restore();
        if (price) {
            this.ctx.beginPath();
            this.ctx.font = this.chart.config.order.time.font;
            var closeText = moment(time).utc().format(this.chart.config.order.time.format);
            var w2 = this.ctx.measureText(closeText);
            this.ctx.fillStyle = this.bgStyle;
            this.ctx.fillRect(tVal2 - w2.width / 2, this.chart.height - 20, w2.width, 20);

            this.ctx.beginPath();
            this.ctx.fillStyle = this.lineStyle;
            this.ctx.textAlign = "center";

            this.ctx.fillText(closeText, tVal2, this.chart.height - 5);


            var startTX = this.chart.getX(startTime);
            var endTX = this.chart.getX(endTime);
            var priceY = this.chart.getY(price);

            //ctx.arc(startTX, priceY, 4, 0, 2 * Math.PI, false);
            this.ctx.arc(endTX, priceY, 4, 0, 2 * Math.PI, false);
            this.ctx.fillStyle = this.lineStyle;
            this.ctx.fill();
            this.ctx.beginPath();
            this.ctx.moveTo(startTX, priceY);
            if (call) {
                this.ctx.lineTo(startTX + 15, priceY - 15);
                this.ctx.lineTo(startTX + 30, priceY);
                this.ctx.lineTo(startTX, priceY);
                this.ctx.fillColor = this.lineStyle;
                this.ctx.fill();
                this.ctx.beginPath();
                this.ctx.font = this.chart.config.order.price.font;
                this.ctx.fillStyle = this.lineStyle;
                this.ctx.textAlign = "left";
                this.ctx.fillText(price, startTX + 30, priceY - 5);
                this.ctx.fillText(amount, startTX + 30, priceY + 15);
            } else {
                this.ctx.lineTo(startTX + 15, priceY + 15);
                this.ctx.lineTo(startTX + 30, priceY);
                this.ctx.lineTo(startTX, priceY);
                this.ctx.fillColor = this.lineStyle;
                this.ctx.fill();
                this.ctx.beginPath();
                this.ctx.font =this.chart.config.order.price.font;
                this.ctx.fillStyle = this.lineStyle;
                this.ctx.textAlign = "left";
                this.ctx.fillText(price, startTX + 30, priceY + 15);
                this.ctx.fillText(amount, startTX + 30, priceY - 5);
            }
            this.ctx.beginPath();
            this.ctx.strokeStyle = this.lineStyle;
            this.ctx.lineWidth = 2;
            this.ctx.moveTo(startTX, priceY);
            this.ctx.lineTo(endTX, priceY);
            this.ctx.stroke();
        }
    };

    function Candle(timeId, open, close, min, max, fake) {
        this.timeId = timeId;
        this.open = open;
        this.close = close;
        this.min = min;
        this.max = max;
        this.pos = 0;
        this.animation = 0;
        this.fake = fake;
    }
    Candle.prototype.draw = function (ctx, chart, nr, total) {
        var offset = nr * (chart.candleWidth + 2 * chart.candlesFreeSpace) + chart.offset;
        if (this.animation == 0) {
            this.closeTo = this.close;
            this.minTo = this.min;
            this.maxTo = this.max;
            this.close = this.open;
            this.min = this.open;
            this.max = this.open;
            this.first = false;
        }
        if (this.animation == 120) {
            this.close = this.closeTo;
            this.min = this.minTo;
            this.max = this.maxTo;
        } else if (this.animation < 120) {
            this.close += (this.closeTo - this.close) / 5;
            this.min += (this.minTo - this.min) / 5;
            this.max += (this.maxTo - this.max) / 5;
        }
        this.animation++;
        this.posX = offset - chart.candleWidth - chart.candlesFreeSpace * 2;
        var d = chart.now;
        var mili = d - this.timeId;
        if (nr == total - 1) {
            var wTotal = (chart.candleWidth + chart.candlesFreeSpace * 2) * 0.001 * mili;
            chart.lastPosX = offset + wTotal - chart.candleWidth - chart.candlesFreeSpace * 2;
            ;
        }
        this.drawLine(ctx, chart, offset, nr, total);
    };
    Candle.prototype.drawLine = function (ctx, chart, offset, nr, total) {
        if (nr == 0) {
            ctx.beginPath();
            ctx.strokeStyle = chart.config.chart.linear.color;
            ctx.lineWidth = 4;
            ctx.moveTo(this.posX, chart.getY(this.open));
        }
        if (nr <= total - 1) {
            ctx.lineTo(this.posX, chart.getY(this.open));
        }
        if (nr == total - 1) {
            ctx.lineTo(chart.lastPosX, chart.getY(this.close));
            ctx.stroke();

            var grd = ctx.createLinearGradient(0, 0, 0, chart.height - 20);

            for(var i=0;i<chart.config.chart.linear.bg.length;i++) {
                grd.addColorStop(i, chart.config.chart.linear.bg[i]);
            }
            ctx.fillStyle = grd;
            ctx.lineTo(chart.lastPosX, chart.height - 20);
            ctx.lineTo(0, chart.height - 20);
            ctx.save();
            ctx.fill();
            ctx.restore();

            ctx.save();
            ctx.beginPath();
            ctx.shadowColor = chart.config.chart.linear.point.shadow;
            ctx.fillStyle = chart.config.chart.linear.point.bg;
            if (chart.blurPlus) {
                chart.blur += 40 / 60;
                if (chart.blur > 20) {
                    chart.blurPlus = false;
                }
            } else {
                chart.blur -= 40 / 60;
                if (chart.blur < 1) {
                    chart.blurPlus = true;
                }
            }
            ctx.arc(chart.lastPosX, chart.getY(this.close), chart.blur / 8 + 1, 0, 2 * Math.PI, false);
            ctx.shadowBlur = chart.blur;
            ctx.fill();

            ctx.restore();
        }
    };

    function Tick(time, price) {
        return {
            price: price,
            time: time
        }
    }

    /**
     * requestAnim shim layer by Paul Irish
     * Finds the first API that works to optimize the animation loop,
     * otherwise defaults to setTimeout().
     */
    window.requestAnimFrame = (function () {
        return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
    })();

    ch = {
        link: function (element) {
            var chart;
            var animateStop = false;
            var serverTime = {
                now: Date.now
            };
            var preparedOrder = {
                symbol: 'EUR/USD',
                optionOff: Math.round(Date.now() / 1000) * 1000 + 10000,
                optionEnd: Math.round(Date.now() / 1000) * 1000 + 10000,
                timeFrame: 10000,
                timeOff: 0
            };

            chart = new Chart(element, serverTime);
            chart.preparedOrder = preparedOrder;
            var symbol = preparedOrder.symbol;
            chart.candlesOffset = 10;
            chart.init();

            var pp = 109.77;
            var candlesAdd = [{timeId: Math.round(Date.now() / 1000) * 1000, close: pp, open: pp, min: pp, max: pp}];
            for (i = 0; i <= 20; i++) {
                var cp = candlesAdd[i];
                pp = cp.close + Math.round((Math.random() - 0.5) * 4) / 1000;
                candlesAdd.push({timeId: cp.timeId - 500, close: pp, open: pp, min: pp, max: pp});
            }
            chart.addCandles(candlesAdd);


            setInterval(function (stomp) {
                var cp = chart.candles[0];
                var mP = 0;
                var mP_CALL = 0;
                var mP_PUT = 0;
                var mc = 0;
                var mC_CALL = 0;
                var mC_PUT = 0;
                var markaPizdec = 0;
                for (i = 0; i < chart.orders.length; i++) {
                    var o = chart.orders[i];
                    if (o.call && o.endTime > Date.now()) {
                        mc++;
                        mP_CALL += o.openPrice;
                        mC_CALL++;
                    } else if (!o.call && o.endTime > Date.now() && cp.close > o.openPrice) {
                        mc--
                        mP_PUT += o.openPrice;
                        mC_PUT++;
                    }
                }
                if (mc > 0) {
                    mP = mP_CALL / mC_CALL;
                    if (mP > cp.close) {
                        markaPizdec = 1;
                    }
                } else if (mc < 0) {
                    mP = mP_PUT / mC_PUT;
                    if (mP < cp.close) {
                        markaPizdec = -1;
                    }
                }
                var pp = cp.close + Math.round((Math.random() - 0.5 + markaPizdec * 0.1) * 4) / 1000;
                chart.onTick({timeId: Date.now(), close: pp, open: pp, min: pp, max: pp, avg: pp});


            }, 500);

            document.getElementById("btn_call").onclick = function () {
                chart.orders.push({
                    id: 1,
                    status: "STARTED",
                    amount: 10,
                    startTime: Date.now(),
                    endTime: preparedOrder.optionEnd,
                    openPrice: chart.candles[0].close,
                    symbol: preparedOrder.symbol,
                    currency: 'USD',
                    call: true
                });
            };
            document.getElementById("btn_put").onclick = function () {
                chart.orders.push({
                    id: 1,
                    status: "STARTED",
                    amount: 10,
                    startTime: Date.now(),
                    endTime: preparedOrder.optionEnd,
                    openPrice: chart.candles[0].close,
                    symbol: preparedOrder.symbol,
                    currency: 'USD',
                    call: false
                })
            };
            document.getElementById("Apple").onclick = function () {


                var pp = 109.77;
                var candlesAdd = [{
                    timeId: Math.round(Date.now() / 1000) * 1000,
                    close: pp,
                    open: pp,
                    min: pp,
                    max: pp
                }];
                for (i = 0; i <= 20; i++) {
                    var cp = candlesAdd[i];
                    pp = cp.close + Math.round((Math.random() - 0.5) * 4) / 1000;
                    candlesAdd.push({timeId: cp.timeId - 500, close: pp, open: pp, min: pp, max: pp});
                }
                chart.candles = [];
                chart.addCandles(candlesAdd);
                var e1 = document.getElementById("EURUSD");
                var e2 = document.getElementById("GAZPROM");
                var e3 = document.getElementById("Apple");
                e1.className = e1.className.replace('ui-state-active', '');
                e2.className = e2.className.replace('ui-state-active', '');
                e3.className = e3.className += ' ui-state-active';
                chart.candleWidthTo = 9;
                chart.candlesFreeSpaceTo = 3;
                chart.candlesOffset = 10;
            };
            document.getElementById("GAZPROM").onclick = function () {


                var pp = 148.70;
                var candlesAdd = [{
                    timeId: Math.round(Date.now() / 1000) * 1000,
                    close: pp,
                    open: pp,
                    min: pp,
                    max: pp
                }];
                for (i = 0; i <= 20; i++) {
                    var cp = candlesAdd[i];
                    pp = cp.close + Math.round((Math.random() - 0.5) * 4) / 1000;
                    candlesAdd.push({timeId: cp.timeId - 500, close: pp, open: pp, min: pp, max: pp});
                }
                chart.candles = [];
                chart.addCandles(candlesAdd);
                var e1 = document.getElementById("EURUSD");
                var e2 = document.getElementById("Apple");
                var e3 = document.getElementById("GAZPROM");
                e1.className = e1.className.replace('ui-state-active', '');
                e2.className = e2.className.replace('ui-state-active', '');
                e3.className = e3.className += ' ui-state-active';
                chart.candleWidthTo = 9;
                chart.candlesFreeSpaceTo = 3;
                chart.candlesOffset = 10;
            };

            document.getElementById("EURUSD").onclick = function () {


                var pp = 1.14;
                var candlesAdd = [{
                    timeId: Math.round(Date.now() / 1000) * 1000,
                    close: pp,
                    open: pp,
                    min: pp,
                    max: pp
                }];
                for (i = 0; i <= 20; i++) {
                    var cp = candlesAdd[i];
                    pp = cp.close + Math.round((Math.random() - 0.5) * 4) / 1000;
                    candlesAdd.push({timeId: cp.timeId - 500, close: pp, open: pp, min: pp, max: pp});
                }
                chart.candles = [];
                chart.addCandles(candlesAdd);
                var e1 = document.getElementById("Apple");
                var e2 = document.getElementById("GAZPROM");
                var e3 = document.getElementById("EURUSD");
                e1.className = e1.className.replace('ui-state-active', '');
                e2.className = e2.className.replace('ui-state-active', '');
                e3.className = e3.className += ' ui-state-active';
                chart.candleWidthTo = 9;
                chart.candlesFreeSpaceTo = 3;
                chart.candlesOffset = 10;
            };
            document.getElementById("restart-chart").onclick = function () {
                var e1 = document.getElementById("chart-holder");
                e1.className = e1.className.replace('deal-finished', '');
                e1.className = e1.className.replace('loose', '');
                chart.orders = [];
            };

            var animate = function () {
                if (animateStop) {
                    return;
                }
                chart.animate();
                requestAnimFrame(animate);
            };
            animate();
        }
    };
    (function () {
        ch.link(document.getElementById('chart-m'));
    })();