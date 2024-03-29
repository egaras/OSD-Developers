<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>OSD | Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="../controllers/home.php">
	<img src="../assets/admin/layout2/img/logo-default.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" id="login-form" method="post">
        <input type="hidden" name="action" value="login">
		<h3 class="form-title">Sign In</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span id="login-error">Please enter valid username and password!</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<input id="username" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success uppercase">Login</button>
			<label class="rememberme check">
			<input type="checkbox" name="remember" value="1"/>Remember </label>
		</div>
		<div class="create-account">
			<p>
				<a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="index.html" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Back</button>
			<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	<form class="register-form" action="index.html" method="post">
        <input type="hidden" name="action" value="addUser">
        <input type="hidden" name="redirect" value="true">
		<h3>Sign Up</h3>
		<p class="hint">
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">First Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="fname"/>
		</div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Last Name</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="lname"/>
        </div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
		</div>
        <div class="form-group">
            <label class="radio radio-inline margin-top-20 margin-bottom-20">
                <input type="radio" name="gender" value="m" id="editmale"/> Male
            </label>
            <label class="radio radio-inline margin-top-20 margin-bottom-20">
                <input type="radio" name="gender" value="f"/> Female
            </label>
        </div>
		<p class="hint">
			 Enter your account details below:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
		</div>
		<div class="form-group margin-top-20 margin-bottom-20">
			<label class="check">
			<input type="checkbox" name="tnc" value="accept" /> I agree to the <a data-toggle="modal" href="#termsModal">
			Terms of Service </a>
			& <a data-toggle="modal" href="#policyModal">
			Privacy Policy </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="register-back-btn" class="btn btn-default">Back</button>
			<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<div id="spinner-bg">
    <div id="spinner">
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
    </div>
</div>
<div id="termsModal" class="modal fade in container" tabindex="-1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Terms of Service</h4>
    </div>
    <div class="modal-body">
        <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
            <div class="row">
                <div class="col-md-12">
                    The following terms and conditions govern all use of the OSD Developers website and all content, services and products available at or through the website, including, but not limited to, the VanillaForums.com premium hosting service (&lsquo;Premium Service&rsquo;), (taken together, the Website). The Website is owned and operated by Vanilla Forums, Inc. (&lsquo;Vanilla&rsquo;). The Website is offered subject to your acceptance without modification of all of the terms and conditions contained herein and all other operating rules, policies (including, without limitation, <a href="privacy/">Vanilla Forums Privacy Policy</a>) and procedures that may be published from time to time on this Site by Vanilla (collectively, the &ldquo;Agreement&rdquo; ).</p>

                    <p>Please read this Agreement carefully before accessing or using the Website. By accessing or using any part of the web site, you agree to become bound by the terms and conditions of this agreement. If you do not agree to all the terms and conditions of this agreement, then you may not access the Website or use any services. If these terms and conditions are considered an offer by Vanilla, acceptance is expressly limited to these terms. The Website is available only to individuals who are at least 13 years old.</p>

                    <ol>
                        <li><p><strong>Your VanillaForums.com Account and Site.</strong> If you create a forum on the Website, you are responsible for maintaining the security of your account and forum, and you are fully responsible for all activities that occur under the account and any other actions taken in connection with the forum. You must not describe or assign keywords to your forum in a misleading or unlawful manner, including in a manner intended to trade on the name or reputation of others, and Vanilla may change or remove any description or keyword that it considers inappropriate or unlawful, or otherwise likely to cause Vanilla liability. You must immediately notify Vanilla of any unauthorized uses of your forum, your account or any other breaches of security. Vanilla will not be liable for any acts or omissions by You, including any damages of any kind incurred as a result of such acts or omissions.</p></li>

                        <li><p><strong>Responsibility of Contributors.</strong> If you operate a forum, comment on a forum, post material to the Website, post links on the Website, or otherwise make (or allow any third party to make) material available by means of the Website (any such material, &ldquo;Content&rdquo;), You are entirely responsible for the content of, and any harm resulting from, that Content. That is the case regardless of whether the Content in question constitutes text, graphics, an audio file, or computer software. By making Content available, you represent and warrant that:</p></li>
                    </ol>

                    <ul>
                        <li>The downloading, copying and use of the Content will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark or trade secret rights, of any third party;</li>
                        <li>If your employer has rights to intellectual property you create, you have either (i) received permission from your employer to post or make available the Content, including but not limited to any software, or (ii) secured from your employer a waiver as to all rights in or to the Content;</li>
                        <li>You have fully complied with any third-party licenses relating to the Content, and have done all things necessary to successfully pass through to end users any required terms;
                            The Content does not contain or install any viruses, worms, malware, Trojan horses or other harmful or destructive content;</li>
                        <li>The Content is not spam, is not machine- or randomly-generated, and does not contain unethical or unwanted commercial content designed to drive traffic to third party sites or boost the search engine rankings of third party sites, or to further unlawful acts (such as phishing) or mislead recipients as to the source of the material (such as spoofing);</li>
                        <li>The Content is not pornographic, libelous or defamatory (more info on what that means), does not contain threats or incite violence towards individuals or entities, and does not violate the privacy or publicity rights of any third party;</li>
                        <li>Your forum is not getting advertised via unwanted electronic messages such as spam links on newsgroups, email lists, other forums and web sites, and similar unsolicited promotional methods;</li>
                        <li>Your forum is not named in a manner that misleads your readers into thinking that you are another person or company. For example, your forum’s URL or name is not the name of a person other than yourself or company other than your own; and</li>
                        <li>You have, in the case of Content that includes computer code, accurately categorized and/or described the type, nature, uses and effects of the materials, whether requested to do so by Vanilla or otherwise.</li>
                    </ul>

                    <p>By submitting Content to Vanilla for inclusion on your Website, you grant Vanilla a world-wide, royalty-free, and non-exclusive license to reproduce, modify, adapt and publish the Content solely for the purpose of displaying, distributing and promoting your forum. If you delete Content, Vanilla will use reasonable efforts to remove it from the Website, but you acknowledge that caching or references to the Content may not be made immediately unavailable.</p>

                    <p>Without limiting any of those representations or warranties, Vanilla has the right (though not the obligation) to, in Vanilla&rsquo;s sole discretion (i) refuse or remove any content that, in Vanilla&rsquo;s reasonable opinion, violates any Vanilla policy or is in any way harmful or objectionable, or (ii) terminate or deny access to and use of the Website to any individual or entity for any reason, in Vanilla&rsquo;s sole discretion. Vanilla will have no obligation to provide a refund of any amounts previously paid.</p>

                    <ol>
                        <li><p><strong>Fees and Payment.</strong> By selecting a subscription plan you agree to pay Vanilla the monthly or annual subscription fees for the service and additional usage fees indicated for that subscription plan. Payments will be charged on the subscription start date and will cover the use of the service for a monthly or annual period as indicated. Subscription fees are not refundable and are paid in advance of using such services. Payment for Services will be made by a valid credit card accepted by Vanilla, unless other payment arrangements have been made. You hereby authorize Vanilla to charge your credit card for such amounts according to your service usage. Vanilla reserves the right to change the payment terms and fees upon thirty (30) days prior written notice to you. Unless otherwise stated in your subscription agreement, the subscription can be canceled by you at anytime unless stated otherwhise in a subscription agreement or master services agreement. No refunds are provided for unused service portion of the billing period following cancellation.</p></li>

                        <li><p><strong>Responsibility of Website Visitors.</strong> Vanilla has not reviewed, and cannot review, all of the material, including computer software, posted to the Website, and cannot therefore be responsible for that material&rsquo;s content, use or effects. By operating the Website, Vanilla does not represent or imply that it endorses the material there posted, or that it believes such material to be accurate, useful or non-harmful. You are responsible for taking precautions as necessary to protect yourself and your computer systems from viruses, worms, Trojan horses, and other harmful or destructive content. The Website may contain content that is offensive, indecent, or otherwise objectionable, as well as content containing technical inaccuracies, typographical mistakes, and other errors. The Website may also contain material that violates the privacy or publicity rights, or infringes the intellectual property and other proprietary rights, of third parties, or the downloading, copying or use of which is subject to additional terms and conditions, stated or unstated. Vanilla disclaims any responsibility for any harm resulting from the use by visitors of the Website, or from any downloading by those visitors of content there posted.</p></li>

                        <li><p><strong>Content Posted on Other Websites.</strong> We have not reviewed, and cannot review, all of the material, including computer software, made available through the websites and webpages to which VanillaForums.com links, and that link to VanillaForums.com. Vanilla does not have any control over those non-VanillaForums websites and webpages, and is not responsible for their contents or their use. By linking to a non-VanillaForums website or webpage, Vanilla does not represent or imply that it endorses such website or webpage. You are responsible for taking precautions as necessary to protect yourself and your computer systems from viruses, worms, Trojan horses, and other harmful or destructive content. Vanilla disclaims any responsibility for any harm resulting from your use of non-VanillaForums websites and webpages.</p></li>

                        <li><p><strong>Copyright Infringement and DMCA Policy.</strong> As Vanilla asks others to respect its intellectual property rights, it respects the intellectual property rights of others. If you believe that material located on or linked to by VanillaForums.com violates your copyright, you are encouraged to notify Vanilla in accordance with <a href="dmca">Vanilla Forums Digital Millennium Copyright Act (”DMCA”) Policy</a>. Vanilla will respond to all such notices, including as required or appropriate by removing the infringing material or disabling all links to the infringing material. In the case of a visitor who may infringe or repeatedly infringes the copyrights or other intellectual property rights of Vanilla or others, Vanilla may, in its discretion, terminate or deny access to and use of the Website. In the case of such termination, Vanilla will have no obligation to provide a refund of any amounts previously paid to Vanilla.</p></li>

                        <li><p><strong>Intellectual Property.</strong> This Agreement does not transfer from Vanilla to you any Vanilla or third party intellectual property, and all right, title and interest in and to such property will remain (as between the parties) solely with Vanilla. Vanilla, VanillaForums, VanillaForums.com, the VanillaForums.com logo, and all other trademarks, service marks, graphics and logos used in connection with VanillaForums.com, or the Website are trademarks or registered trademarks of Vanilla or Vanilla&rsquo;s licensors. Other trademarks, service marks, graphics and logos used in connection with the Website may be the trademarks of other third parties. Your use of the Website grants you no right or license to reproduce or otherwise use any Vanilla or third-party trademarks.</p></li>

                        <li><p><strong>Changes.</strong> Vanilla reserves the right, at its sole discretion, to modify or replace any part of this Agreement. It is your responsibility to check this Agreement periodically for changes. Your continued use of or access to the Website following the posting of any changes to this Agreement constitutes acceptance of those changes. Vanilla may also, in the future, offer new services and/or features through the Website (including, the release of new tools and resources). Such new features and/or services shall be subject to the terms and conditions of this Agreement.</p></li>

                        <li><p><strong>Termination.</strong> You may terminate your account on Vanillaforums.com at any time by contacting billing@vanillaforums.com. There are no refunds for any fees paid. YOU ARE SOLELY RESPONSIBLE FOR TERMINATING YOUR ACCOUNT AND THIS AGREEMENT. WE ARE NOT RESPONSIBLE FOR YOUR FAILURE TO PROPERLY TERMINATE YOUR ACCOUNT AND THIS AGREEMENT OR FOR ANY CREDIT CARD OR OTHER CHARGES OR FEES YOU INCUR AS A RESULT OF YOUR FAILURE TO PROPERLY TERMINATE YOUR ACCOUNT AND THIS AGREEMENT.</p></li>
                    </ol>

                    <p>Vanilla may terminate your access to all or any part of the Website at any time, with or without cause, with or without notice, effective immediately. Notwithstanding the foregoing, if you have a paid subscription plan or signed agreement with Vanilla, such account can only be terminated by Vanilla if you materially breach this Agreement and fail to cure such breach within thirty (30) days from Vanilla&rsquo;s notice to you thereof; provided that, Vanilla can terminate the Website immediately as part of a general shut down of our service. All provisions of this Agreement which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>

                    <ol>
                        <li><p><strong>Disclaimer of Warranties.</strong> The Website is provided “as is”. Vanilla and its suppliers and licensors hereby disclaim all warranties of any kind, express or implied, including, without limitation, the warranties of merchantability, fitness for a particular purpose and non-infringement. Neither Vanilla nor its suppliers and licensors, makes any warranty that the Website will be error free or that access thereto will be continuous or uninterrupted. You understand that you download from, or otherwise obtain content or services through, the Website at your own discretion and risk.</p></li>

                        <li><p><strong>Limitation of Liability.</strong> In no event will Vanilla, or its suppliers or licensors, be liable with respect to any subject matter of this agreement under any contract, negligence, strict liability or other legal or equitable theory for: (i) any special, incidental or consequential damages; (ii) the cost of procurement or substitute products or services; (iii) for interruption of use or loss or corruption of data; or (iv) for any amounts that exceed the fees paid by you to Vanilla under this agreement during the twelve (12) month period prior to the cause of action. Vanilla shall have no liability for any failure or delay due to matters beyond their reasonable control. The foregoing shall not apply to the extent prohibited by applicable law.</p></li>

                        <li><p><strong>General Representation and Warranty.</strong> You represent and warrant that (i) your use of the Website will be in strict accordance with the Vanilla Privacy Policy, with this Agreement and with all applicable laws and regulations (including without limitation any local laws or regulations in your country, state, city, or other governmental area, regarding online conduct and acceptable content, and including all applicable laws regarding the transmission of technical data exported from the United States or the country in which you reside) and (ii) your use of the Website will not infringe or misappropriate the intellectual property rights of any third party.</p></li>

                        <li><p><strong>Indemnification.</strong> You agree to indemnify and hold harmless Vanilla, its contractors, and its licensors, and their respective directors, officers, employees and agents from and against any and all claims and expenses, including attorneys&rsquo; fees, arising out of your use of the Website, including but not limited to your violation of this Agreement.</p></li>

                        <li><p><strong>Miscellaneous.</strong> This Agreement constitutes the entire agreement between Vanilla and you concerning the subject matter hereof, and they may only be modified by a written amendment signed by an authorized executive of Vanilla, or by the posting by Vanilla of a revised version. The Agreement shall be governed by the laws of Canada without regard to its choice or law or conflict of laws provisions. All legal actions in connection with the Agreement shall be brought in the state or federal courts located in Montreal, Quebec, Canada. The prevailing party in any action or proceeding to enforce this Agreement shall be entitled to costs and attorneys&rsquo; fees. If any part of this Agreement is held invalid or unenforceable, that part will be construed to reflect the parties&rsquo; original intent, and the remaining portions will remain in full force and effect. A waiver by either party of any term or condition of this Agreement or any breach thereof, in any one instance, will not waive such term or condition or any subsequent breach thereof. Rights under this Agreement may be assigned to any party that consents to, and agrees to be bound by, its terms and conditions; Vanilla may assign its rights under this Agreement without condition. This Agreement will be binding upon and will inure to the benefit of the parties, their successors and permitted assigns.</p></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn default">Close</button>
    </div>
</div>
<div id="policyModal" class="modal fade in container" tabindex="-1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Terms of Service</h4>
    </div>
    <div class="modal-body">
        <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
            <div class="row">
                <div class="col-md-12">
                    <h2 id="website-visitors">Website Visitors</h2>

                    <p>Like most website operators, Vanilla collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Vanilla’s purpose in collecting non-personally identifying information is to better understand how Vanilla’s visitors use its website. From time to time, Vanilla may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>

                    <p>Vanilla also collects potentially personally-identifying information like Internet Protocol (IP) addresses. Vanilla does not use such information to identify its visitors, however, and does not disclose such information, other than under the same circumstances that it uses and discloses personally-identifying information, as described below.</p>

                    <h2 id="gathering-of-personally-identifying-information">Gathering of Personally-Identifying Information</h2>

                    <p>Certain visitors to Vanilla&rsquo;s websites choose to interact with Vanilla in ways that require Vanilla to gather personally-identifying information. The amount and type of information that Vanilla gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a forum at vanillaforums.com to provide a username and email address. Those who engage in transactions with Vanilla are asked to provide additional information, including as necessary the personal and financial information required to process those transactions. In each case, Vanilla collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor&rsquo;s interaction with Vanilla. Vanilla does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities. Vanilla does not keep a copy of any credit card information once a transaction is complete.</p>

                    <h2 id="aggregated-statistics">Aggregated Statistics</h2>

                    <p>Vanilla may collect statistics about the behavior of visitors to its websites. For instance, Vanilla may monitor the most popular forums on the VanillaForums.com site. Vanilla may display this information publicly or provide it to others. However, Vanilla does not disclose personally-identifying information other than as described below.</p>

                    <h2 id="protection-of-certain-personally-identifying-information">Protection of Certain Personally-Identifying Information</h2>

                    <p>Vanilla discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on Vanilla&rsquo;s behalf or to provide services available at Vanilla&rsquo;s websites, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using Vanilla&rsquo;s websites, you consent to the transfer of such information to them. Vanilla will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, Vanilla discloses potentially personally-identifying and personally-identifying information only when required to do so by law, or when Vanilla believes in good faith that disclosure is reasonably necessary to protect the property or rights of Vanilla, third parties or the public at large. If you are a registered user of an Vanilla website and have supplied your email address, Vanilla may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what&rsquo;s going on with Vanilla and our products. We primarily use our various product forums to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. Vanilla takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>

                    <h2 id="cookies">Cookies</h2>

                    <p>A cookie is a string of information that a website stores on a visitor&rsquo;s computer, and that the visitor&rsquo;s browser provides to the website each time the visitor returns. Vanilla uses cookies to help Vanilla identify and track visitors, their usage of Vanilla website, and their website access preferences. Vanilla visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Vanilla&rsquo;s websites, with the drawback that certain features of Vanilla&rsquo;s websites may not function properly without the aid of cookies.</p>

                    <h2 id="ads">Ads</h2>

                    <p>Ads appearing on any of our websites may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Vanilla and does not cover the use of cookies by any advertisers.</p>

                    <h2 id="privacy-policy-changes">Privacy Policy Changes</h2>

                    <p>Although most changes are likely to be minor, Vanilla may change its Privacy Policy from time to time, and in Vanilla&rsquo;s sole discretion. Vanilla encourages visitors to frequently check this page for any changes to its Privacy Policy. If you have a vanillaforums.com account, you should also check your forum&rsquo;s dashboard for alerts to these changes. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn default">Close</button>
    </div>
</div>
<div id="connectionModal" class="modal fade" tabindex="-1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Connection Lost!</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center font-red-thunderbird">
                    <i class="fa fa-exclamation-triangle" style="font-size: 130px; margin-top: 60px"></i>
                    <h3>Cannot connection to server!</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
	 2017 © OSD Developers. ITI Intake 37.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/ui-extended-modals.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
        UIExtendedModals.init();
        $('#spinner-bg').hide();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
