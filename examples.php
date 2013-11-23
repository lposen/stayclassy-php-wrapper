<?php 

/**
 * 1. Account Info
 * 2. Account Activity
 * 3. Account Sponsor Matching
 * 4. Campaigns
 * 5. Campaign Info
 * 6. Campaign Tickets
 * 7. Campaign Search
 * 8. Fundraisers
 * 9. Fundraiser Info
 * 10. Teams
 * 11. Team Info
 * 12. Team Create
 * 13. Donations
 * 14. Recurring
 * 15. Designation Info
 * 16. User Facebook Friend Activity
 */

require 'StayClassy.class.php';

// TODO: replace with YOUR_TOKEN_HERE
$token = 'utvVCIjXQWPvXIU80VME';
$StayClassy = new StayClassy($token);

// 1. Account Info
$ai = $StayClassy->call('account-info', array(
	'cid' => 5417 //required
));
// Some returned information.  Use this syntax for other returned informatio as well.
$name = $ai['name'];
$img = $ai['charity_image_large'];
$fnd_pages = $ai['total_fund_pages'];
echo "Name: ".$name."<br><img src='".$img."'><br>Total Fundraising Pages: ".$fnd_pages;

// 2. Account Activity
$aa = $StayClassy->call('account-activity', array(
	'cid' => 5417, //required
	'eid' => '',
	'did' => '',
	'fcid' => '',
	'limit' => '',
	'type' => ''
));

// 3. Account Sponsor Matching
$asm = $StayClassy->call('account-sponsor-matching', array(
	'cid' => 5417, //required
	'eid' => '' //required
));

// 4. Campaigns
$c = $StayClassy->call('campaigns', array(
	'cid' => 5417, //required
	'eid' => '' 
));

// 5. Campaign Info
$ci = $StayClassy->call('campaign-info', array(
	'cid' => 5417, //required
	'eid' => '' //required
));

// 6. Campaign Tickets
$ct = $StayClassy->call('campaign-tickets', array(
	'cid' => 5417, //required
	'eid' => '' //required
));

// 7. Campaign Search
$cs = $StayClassy->call('campaign-search', array(
	'cid' => 5417, //required
	'q' => '',
	'zip' => '',
	'within' => '',
	'limit' => ''
));

// 8. Fundraisers
$f = $StayClassy->call('fundraisers', array(
	'cid' => 5417, //required
	'fcid' => '',
	'did' => '',
	'fb_uid' => '',
	'mid' => '',
	'email' => '',
	'q' => '',
	'limit' => '',
	'featured' => '',
	'cre_date_start' => '',
	'cre_date_end' => '',
	'order' => ''
));

// 9. Fundraiser Info
$fi = $StayClassy->call('fundraiser-info', array(
	'cid' => 5417, //required
	'fcid' => '' //required
));

// 10. Teams
$t = $StayClassy->call('teams', array(
	'cid' => 5417, //required
	'eid' => '',
	'ftid' => '',
	'mid' => '',
	'limit' => '',
	'order' => ''

));

// 11. Team Info
$ti = $StayClassy->call('team-info', array(
	'cid' => 5417, //required
	'ftid' => ''  //required
));

// 12. Team Create
$tc = $StayClassy->call('team-create', array(
	'cid' => 5417, //required
	'eid' => '', //required
	'team_name' => '', //required
	'goal' => '', //required
	'email' => ''
));

// 13. Donations
$d = $StayClassy->call('donations', array(
	'cid' => 5417, //required
	'eid' => '',
	'fcid' => '',
	'ftid' => '',
	'oid' => '',
	'mid' => '',
	'start_date' => '',
	'end_date' => '',
	'limit' => ''
));

// 14. Recurring
$r = $StayClassy->call('recurring', array(
	'cid' => 5417,  //required
	'eid' => '',
	'mid' => '',
	'rid' => '',
	'limit' => ''
));

// 15. Designation Info
$di = $StayClassy->call('designation-info', array(
	'cid' => 5417, //required
	'did' => '' //required
));

// 16. User Facebook Friend Activity
$uffa = $StayClassy->call('user-fb-friend-activity', array(
	'cid' => 5417, //required
	'eid' => '',
	'fb_uid' => '', //required
	'friends_ids' => '', //required
	'type' => ''
));

?>