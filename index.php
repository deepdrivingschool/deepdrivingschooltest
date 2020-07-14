<?PHP
/*
This is the main page
This page includes the configuration file and the templates
*/

// Vaidate page to display
error_reporting(1);
$p = (isset($_GET['p'])) ? $_GET['p'] : ((isset($_POST['p'])) ? $_POST['p'] : NULL);

//Switch statement to display a page
switch($p)	{
	case 'home':
		$page = 'home.php';
		$page_title = 'Deep Driving School Surrey BC | Driving Lessons Delta | Driver Training Course';
		break;
	case 'contact-us':
		$page = 'contact_us.php';
		$page_title = 'Deep Driving School Surrey BC | Driving Lessons Delta | Driver Training Course | Contact us';
		break;
	case 'services':
		$page = 'services.php';
		$page_title = 'Deep Driving School Surrey BC | Driving Lessons Delta | Driver Training Course | Services';
		break;	
	case 'Error':
		$page = 'error.php';
		$page_title = 'Deep Driving School Surrey BC | Driving Lessons Delta | Driver Training Course';
		break;		

	//Default is to include main page
	default:
		$page = 'home.php';
		$page_title = 'Deep Driving School Surrey BC | Driving Lessons Delta | Driver Training Course | Home';
		break;
}
//Include logo file
include_once('includes/header.php');

//Include content specific page file
if(isset($page) && $page!=NULL)		{
	include_once($page);
}	
else	{
	include_once('home.php');
}		

//Include footer file
include_once('includes/footer.php');

?>