
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <?php
//define("url", "http://192.168.1.203/conf");
 if (!defined('url'))define("url", "https://mss-templete-sivanmyc.c9.io/digitalsummit");
 
 //define("url", "http://www.miraclesoft.com/conf");
 error_reporting(0);
define("SMTP_HOST", "smtp.miraclesoft.com"); //Hostname of the mail server
define("SMTP_PORT", "587"); //Port of the SMTP like to be 25, 80, 465 or 587
define("SMTP_UNAME", "mssapp@miraclesoft.com"); //Username for SMTP authentication any valid email created in your domain
define("SMTP_PWORD", "Miracle@2k16"); //Password for SMTP authentication
define("SMTP_SECURE", "tls"); //Password for SMTP authentication

 if (!defined('CONF_EMAILFLAG')) define('CONF_EMAILFLAG', '1');
 if (!defined('DIGITAL_SUMMIT_REGISTRAINTS'))define("DIGITAL_SUMMIT_REGISTRAINTS", "vkandregula@miraclesoft.com,Prasad Kandregula;skola2@miraclesoft.com,Santosh Kola");
 #if (!defined('DIGITAL_SUMMIT_REGISTRAINTS'))define("DIGITAL_SUMMIT_REGISTRAINTS", "plokam@miraclesoft.com,Prasad Lokam;clokam@miraclesoft.com,Chanakya Lokam");
 
 if (!defined('DIGITAL_SUMMIT_CONTACTUS'))define("DIGITAL_SUMMIT_CONTACTUS", "vkandregula@miraclesoft.com,Prasad Kandregula;skola2@miraclesoft.com,Santosh Kola");
 //if (!defined('DIGITAL_SUMMIT_CONTACTUS'))define("DIGITAL_SUMMIT_CONTACTUS", "plokam@miraclesoft.com,Prasad Lokam;clokam@miraclesoft.com,Chanakya Lokam");
 
 if (!defined('APPLICANT_ATTACHMENT_LOCATION'))define("APPLICANT_ATTACHMENT_LOCATION", "/usr/local/ConfFiles/ApplicantAttachments/");
 
 if (!defined('DIGITAL_SUMMIT_JOB_APPLICANTS'))define("DIGITAL_SUMMIT_JOB_APPLICANTS", "vkandregula@miraclesoft.com,Prasad Kandregula;skola2@miraclesoft.com,Santosh Kola");
 
 
if (!defined('DIGITAL_SUMMIT_HACKATHON'))define("DIGITAL_SUMMIT_HACKATHON", "skola2@miraclesoft.com,Santosh Kola;tkadamanti@miraclesoft.com,Phanindra Kanuri");
if (!defined('DIGITAL_SUMMIT_CULTURAL'))define("DIGITAL_SUMMIT_CULTURAL", "skola2@miraclesoft.com,Santosh Kola;tkadamanti@miraclesoft.com,Phanindra Kanuri");
?>