<?php
function stream($k)
{
if( $k == "Indian Institute of Technology(IIT) Kanpur" || $k == "Indian Institute of Technology(IIT) Kharagpur" || $k == "Indian Institute of Technology(IIT) Bombay" || $k == "Indian Institute of Technology(IIT) Madras" || $k == "Indian Institute of Technology(IIT) Guwahati" || $k == "Indian Institute of Technology(IIT) Roorkee" || $k == "Indian Institute of Technology(IIT) BHU ,VARANASI" || $k == "Indian School Of Mines(ISM) Dhanbad" || $k == "National Institute Of Technology(NIT) Trichy" || $k== "National Institute Of Technology(NIT) Warangal" || $k == "Indian Institute Of Information Technology(IIIT) Hyderabad" || $k == "Birla Institute Of Technology and Science(BITS) Pilani" || $k == "PSG College of Technology Coimbtore" || $k == "Birla Institute Of Technology(BIT) Mesra" || $k == "Dhirubhai Ambani Institute Of Engineering and Technology(DAIICT) Gandhinagar" || $k == "Thapar Institute Of Engineering and Technology Patiala" || $k == "R V College Of Engineering Banglore" || $k == "Vellore Institute Of Technology Vellore" )
{
$p="Engineering";
}
else if ( $k == "All Indian Institute Of Medical Science(AIIMS) Delhi" || $k == "Armed Forces Medical College(AFMC) ,Pune" || $k == "Jawaharlal Institute of Postgraduate Medical Education and Research(JIPMER) ,Pondicherry" || $k == "Maulana Azad Medical College(MAMC) ,Delhi" || $k == "Institute Of Medical Science(IMS) BHU" || $k == "Christian Medical College & Hospital(CMC) Vellore" || $k == "St. John Medical College, Banglore" || $k == "Kasturba Medical College ,Manipal" || $k == "Sri Ramchandra Medical College ,Chennai" || $k == "Mahatma Gandhi Institute of Medical Sciences ,Wardha" || $k == "M.S. Ramaiah Medical College ,Banglore" )
{$p = "Medical";}
else if ($k == "Indian Institute Of Management(IIM) Banglore" || $k == "Indian Institute Of Management(IIM) Ahmedabad" || $k == "Indian Institute Of Management(IIM) Lucknow" || $k == "Indian Institute Of Management(IIM) Calcutta" || $k == "Indian Institute Of Management(IIM) Indore" || $k == "Faculty of Management Studies DU ,Delhi" || $k == "Management Development Institute(MDI) ,Gurgaon" || $k == "Xavier Labour Relations Institute of Management(XLRI) Jamshedpur")
{$p = "Management";}
else if($k == "National Law School of India University(NLSIU) Banglore" || $k == "Nalsar University of Law , Hyderabad" || $k == "West Bengal National University of Juridical Sciences(NUJS) ,Kolkata" || $k == "National Law University ,Jodhpur" || $k == "National Law Institute University(NLIU) ,Bhopal" || $k == "Faculty Of Law DU ,Delhi" || $k == "ILS Law College ,Pune" || $k == "Symbiosis Society Law College ,Pune" || $k =="Amity Law School ,Delhi" || $k == "Government Law College ,Mumbai")
{$p = "Law";}
else
{$p="Student";}
return $p;
}
function image($k)
{
if( $k == "Indian Institute of Technology(IIT) Kanpur" || $k == "Indian Institute of Technology(IIT) Kharagpur" || $k == "Indian Institute of Technology(IIT) Bombay" || $k == "Indian Institute of Technology(IIT) Madras" || $k == "Indian Institute of Technology(IIT) Guwahati" || $k == "Indian Institute of Technology(IIT) Roorkee" || $k == "Indian Institute of Technology(IIT) BHU ,VARANASI" || $k == "Indian School Of Mines(ISM) Dhanbad" || $k == "National Institute Of Technology(NIT) Trichy" || $k== "National Institute Of Technology(NIT) Warangal" || $k == "Indian Institute Of Information Technology(IIIT) Hyderabad" || $k == "Birla Institute Of Technology and Science(BITS) Pilani" || $k == "PSG College of Technology Coimbtore" || $k == "Birla Institute Of Technology(BIT) Mesra" || $k == "Dhirubhai Ambani Institute Of Engineering and Technology(DAIICT) Gandhinagar" || $k == "Thapar Institute Of Engineering and Technology Patiala" || $k == "R V College Of Engineering Banglore" || $k == "Vellore Institute Of Technology Vellore" )
{
$z="e";
}
else if ( $k == "All Indian Institute Of Medical Science(AIIMS) Delhi" || $k == "Armed Forces Medical College(AFMC) ,Pune" || $k == "Jawaharlal Institute of Postgraduate Medical Education and Research(JIPMER) ,Pondicherry" || $k == "Maulana Azad Medical College(MAMC) ,Delhi" || $k == "Institute Of Medical Science(IMS) BHU" || $k == "Christian Medical College & Hospital(CMC) Vellore" || $k == "St. John Medical College, Banglore" || $k == "Kasturba Medical College ,Manipal" || $k == "Sri Ramchandra Medical College ,Chennai" || $k == "Mahatma Gandhi Institute of Medical Sciences ,Wardha" || $k == "M.S. Ramaiah Medical College ,Banglore" )
{$z = "me";}
else if ($k == "Indian Institute Of Management(IIM) Banglore" || $k == "Indian Institute Of Management(IIM) Ahmedabad" || $k == "Indian Institute Of Management(IIM) Lucknow" || $k == "Indian Institute Of Management(IIM) Calcutta" || $k == "Indian Institute Of Management(IIM) Indore" || $k == "Faculty of Management Studies DU ,Delhi" || $k == "Management Development Institute(MDI) ,Gurgaon" || $k == "Xavier Labour Relations Institute of Management(XLRI) Jamshedpur")
{$z = "ma";}
else if($k == "National Law School of India University(NLSIU) Banglore" || $k == "Nalsar University of Law , Hyderabad" || $k == "West Bengal National University of Juridical Sciences(NUJS) ,Kolkata" || $k == "National Law University ,Jodhpur" || $k == "National Law Institute University(NLIU) ,Bhopal" || $k == "Faculty Of Law DU ,Delhi" || $k == "ILS Law College ,Pune" || $k == "Symbiosis Society Law College ,Pune" || $k =="Amity Law School ,Delhi" || $k == "Government Law College ,Mumbai")
{$z = "l";}
else 
{$z="y";}
return $z;
}
function get_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR'&quot);
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>