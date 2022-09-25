CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pwd` timestamp(255) NOT NULL,
  `cpwd` timestamp(255) NOT NULL,
  `dob` timestamp(11) NOT NULL,
  `biz_state` varchar(255) NOT NULL,
  `st_of_residence` varchar(255) NOT NULL,

  `qualification` varchar(255) NOT NULL,
  `have_you_rec` varchar(255) NOT NULL,
  `hear_abt_us` varchar(255) NOT NULL,
  `disability` varchar(255) NOT NULL,
  `biz_name` varchar(255) NOT NULL,
  `biz_location` varchar(255) NOT NULL,
  `biz_age` varchar(255) NOT NULL,
  `iz_biz_reg` varchar(255) NOT NULL,
  `gen_revenue` varchar(255) NOT NULL,
  `have_partner` varchar(255) NOT NULL,
  `partner_cont` varchar(255) NOT NULL,
  `biz_sector` varchar(255) NOT NULL,
  `biz_descrp` varchar(255) NOT NULL,
  `biz_impact` varchar(255) NOT NULL,
  `challenge` varchar(255) NOT NULL,
  `reason_for_ent` varchar(255) NOT NULL,
  `grantuse` varchar(255) NOT NULL,
  `agree_mentorship` varchar(255) NOT NULL,
  `sgd_goals` varchar(255) NOT NULL,
  `verify_key` varchar(255) NOT NULL
) 

-- INSERT
INSERT INTO users(fname,lname,oname,email,phone,gender,pwd,cpwd,dob,biz_state,st_of_residence,qualification,have_you_rec, hear_abt_us, disability, biz_name, biz_location, biz_age, iz_biz_reg, gen_revenue, have_partner, partner_cont, biz_sector, biz_descrp, biz_impact, challenge, reason_for_ent, grantuse, agree_mentorship, sgd_goals, verify_key) VALUES ('$fname','$lname','$oname','$email','$phone','$gender','$pwd','$cpwd','$dob','$biz_state','$st_of_residence','$qualification','$have_you_rec','$hear_abt_us', '$disability', '$biz_name', '$biz_location', '$biz_age', '$iz_biz_reg', '$gen_revenue', '$have_partner', '$partner_cont', '$biz_sector', '$biz_descrp', '$biz_impact', '$challenge', '$reason_for_ent', '$grantuse', '$agree_mentorship', '$sgd_goals', '$verify_key')