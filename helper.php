<?php
defined('_JEXEC') or die;

class modSubscribeHelper
{
	function sendMail($params)
	{
		$app = JFactory::getApplication();
		$input = new JInput;
		$date = date("Y-m-d H:i:s",time());
		$created = $date;
		$modified=$date;
		$subscribe=1;
		$name = $input->get('name', null, 'string');
		$email = $input->get('email', null, 'string');
		$message = "New user subscribed";
		$emailreceipt = $params->get('emailreceipt');
		$sitetitle = $app->getCfg('sitename');
		if($name == null || $email == null)
			return false;
		
		$message = "Name: ".$name."\n E-Mail: ".$email."\n Message: ".$message."\n Check: ";
		
		$mailer = & JFactory::getMailer();
		$mailer->setSender($input->get('email', null));
		$mailer->addRecipient($emailreceipt);
		$mailer->setSubject('Message from '.$sitetitle);
		$mailer->setBody($message);
		$send = & $mailer->Send();
		
		// Get a db connection.
		$db = JFactory::getDbo();
		
		// Create a new query object.
		$query = $db->getQuery(true);
		
		// Insert columns.
		$columns = array('fname', 'email', 'subscribe', 'created', 'modified');
		
		// Insert values.
		$values = array($db->quote($name), $db->quote($email), $db->quote($subscribe), $db->quote($created), $db->quote($modified));
		
		// Prepare the insert query.
		$query
		->insert($db->quoteName('#__devcloud_subscribe'))
		->columns($db->quoteName($columns))
		->values(implode(',', $values));
		
		// Reset the query using our newly populated query object.
		$db->setQuery($query);
		
		try {
			// Execute the query in Joomla 3.0.
			$result = $db->execute();
		} catch (Exception $e) {
			// catch any database errors.
		}
		
		if($send != true)
		{
			echo "Error Sending Email: ". $send->message;
			return false;
		}
		else
		{
			echo "Subscription Successful!";
			return true;
		}
	}
	function store()
	{
	
		$jinput = JFactory::getApplication()->input;
		$formdata    = $jinput->get('jform', array(),'array');
		
		$modified=$date;
		
		$catid = $formdata['title'];
		$user_id = $formdata['user_id'];
		$project_title = $formdata['project_title'];
		$duedate= mktime(0, 0, 0, date("m")  , date("d")+14, date("Y"));
		//$duedate = $formdata['duedate'];
		$created_by = $formdata['username'];
		$modified_by = $formdata['username'];
		$min_budget = $formdata['min_budget'];
		$max_budget = $formdata['max_budget'];
		$project_description = $formdata['project_description'];
		$noofquotes = $formdata['noofquotes'];
		$website_example = $formdata['website_example'];
	
		// Get a db connection.
		$db = JFactory::getDbo();
	
		// Create a new query object.
		$query = $db->getQuery(true);
	
		// Insert columns.
		$columns = array('user_id', 'project_title', 'catid', 'duedate', 'created', 'created_by', 'modified', 'modified_by',
				'min_budget', 'max_budget', 'project_description', 'noofquotes', 'website_example');
	
		// Insert values.
		$values = array($db->quote($user_id), $db->quote($project_title), $db->quote($catid), $db->quote($duedate), $db->quote($created),
				$db->quote($created_by), $db->quote($modified), $db->quote($modified_by), $db->quote($min_budget),
				$db->quote($max_budget), $db->quote($project_description), $db->quote($noofquotes), $db->quote($website_example),);
	
		// Prepare the insert query.
		$query
		->insert($db->quoteName('#__devcloud_leads'))
		->columns($db->quoteName($columns))
		->values(implode(',', $values));
	
		// Reset the query using our newly populated query object.
		$db->setQuery($query);
	
		try {
			// Execute the query in Joomla 3.0.
			$result = $db->execute();
		} catch (Exception $e) {
			// catch any database errors.
		}
	}
}
?>