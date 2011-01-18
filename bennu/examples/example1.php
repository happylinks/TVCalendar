<?php

error_reporting(E_ALL);

include('../lib/bennu.inc.php');

echo '<pre>';
echo "\n";

$a = new iCalendar;
$ev = new iCalendar_event;

// Convenience: if you don't specify this, one will be auto-generated
//$ev->add_property('uid', '4306f93e-e379-11d9-bd57-ff0e7e0d5d50');

// Attachments: an application and a URL
//$ev->add_property('attach', base64_encode('Application-Data-Octets'), array('fmttype' => 'application/octet-stream', 'encoding' => 'BASe64', 'value' => 'binARY'));
//$ev->add_property('attach', 'http://www.moodle.org/');

// Summary and description; also resources
$ev->add_property('summary', 'Blablabla');
$ev->add_property('description', 'These are: some "notes" for this event');
//$ev->add_property('resources', array('one of this', 'one of that'));

// Start-end date
//$ev->add_property('class', 'PRIVATE');
$ev->add_property('dtstart', '20050623', array('value' => 'DATE'));
$ev->add_property('dtend', '20050624', array('value' => 'DATE'));
$ev->add_property('dtstamp', '20050622T235601Z');
//$ev->add_property('attendee', 'mailto:pj@uom.gr', array('cn' => 'John Papaioannou', 'delegated-from' => array('mailto:bla@some.net', 'mailto:bla@some.net')));

//$ev->add_property('exdate', array('20050622T235601Z', '20060622T235601Z'));
//$ev->add_property('exrule', 'FREQ=WEEKLY;COUNT=4;INTERVAL=2;BYDAY=TU,TH');
//$ev->add_property('request-status', '2.3.1;Some explanation for the request status code');

//$ev->add_property('recurrence-id', '20050622T235601Z', array('value' => 'DATE-TIME', 'range' => 'thisANDFUTURE'));
//$ev->add_property('rdate', array('19960403T020000Z/19960403T040000Z','19960404T010000Z/PT3H'), array('value' => 'PERIOD'));
//$ev->add_property('rdate', array(19970101,19970120,19970217,19970421,19970526,19970704,19970901,19971014,19971128,19971129,19971225), array('value' => 'DATE'));


//$ev->add_property('geo', array(37.386013,-122.082932));
//$ev->add_property('organizer', 'MAILTO:jsmith@host1.com', array('cn' => 'John C. Smith', 'dir' => 'ldap://host.com:6666/o=3DDC%20Associates,c=3DUS??(cn=3DJohn%20Smith)'));

$a->add_component($ev);
echo $a->serialize();

//echo print_r($ev);

echo '</pre>';

?>