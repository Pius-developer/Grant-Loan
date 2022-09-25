"use strict";

$("#swal-1").click(function () {
  swal('Hello');
});

$("#swal-2").click(function () {
  swal('Deposit Guide', 'Enter Amount You Choose to Deposit and Proceed.. Pay Exactly the Deposit Amount To Our Bitcoin wallet Address 18itvMZtpptC2XcMs9oiEjAyqF2uWYSTfJ. Please be Informed That For faster Processing of your Deposit we highly Suggest you Send a Proof of payment to us', 'info');
});

$("#swal-3").click(function () {
  swal('Good Job', 'You clicked the button!', 'warning');
});

$("#swal-4").click(function () {
  swal('Good Job', 'You clicked the button!', 'info');
});

$("#swal-5").click(function () {
  swal('Good Job', 'You clicked the button!', 'error');
});

$("#swal-6").click(function () {
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover this imaginary file!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
        swal('Poof! Your imaginary file has been deleted!', {
          icon: 'success',
        });
      } else {
        swal('Your imaginary file is safe!');
      }
    });
});

$("#swal-7").click(function () {
  swal({
    title: 'What is your name?',
    content: {
      element: 'input',
      attributes: {
        placeholder: 'Type your name',
        type: 'text',
      },
    },
  }).then((data) => {
    swal('Hello, ' + data + '!');
  });
});

$("#swal-8").click(function () {
  swal('This modal will disappear soon!', {
    buttons: false,
    timer: 3000,
  });
});