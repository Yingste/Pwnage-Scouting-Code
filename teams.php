<?php

// get the q parameter from URL
$q=$_REQUEST["q"]; $team="";








// !!!!!!!!!!!!!!!!!!!!When inputing teams for teams with less than 4 charactors include a zero to fill the 4 slots
// the program will only track corectly if every slot contains 4 charactors

//sample
/*if ($q=="1")
{
	$team .="3488".","."1850".","."4302".","."4972".","."2830".","."2358";
}*/

if ($q=="1")
{
$team .="0461".","."0020".","."1114".","."4488".","."0330".","."0447";
}

if ($q=="2")
{
$team .="0340".","."0071".","."1730".","."0233".","."1310".","."1732";
}

if ($q=="3")
{
$team .="0225".","."0195".","."2614".","."0045".","."0368".","."0469";
}

if ($q=="4")
{
$team .="1806".","."1477".","."1718".","."0399".","."0494".","."0179";
}

if ($q=="5")
{
$team .="0359".","."2337".","."0254".","."0027".","."1625".","."1741";
}

if ($q=="6")
{
$team .="0148".","."0910".","."4039".","."2468".","."2481".","."1108";
}

if ($q=="7")
{
$team .="0067".","."0503".","."1640".","."0234".","."0573".","."0011";
}

if ($q=="8")
{
$team .="3683".","."0125".","."0107".","."1024".","."0074".","."1023";
}

if ($q=="9")
{
$team .="1619".","."2056".","."0868".","."0624".","."1086".","."2867";
}

if ($q=="10")
{
$team .="3478".","."2013".","."2451".","."0016".","."2175".","."2590";
}

if ($q=="0011")
{
$team .="3098".","."0118".","."1817".","."2928".","."0033".","."0051";
}

if ($q=="12")
{
$team .="1241".","."0461".","."0359".","."4265".","."0071".","."0573";
}

if ($q=="13")
{
$team .="0447".","."0234".","."2614".","."1741".","."0179".","."1310";
}

if ($q=="14")
{
$team .="4488".","."0254".","."0011".","."4039".","."0368".","."0125";
}

if ($q=="15")
{
$team .="1732".","."1024".","."2337".","."0503".","."1108".","."0624";
}

if ($q=="0016")
{
$team .="1114".","."0074".","."0868".","."0118".","."2468".","."0027";
}

if ($q=="17")
{
$team .="1625".","."1619".","."0233".","."0469".","."2451".","."1806";
}

if ($q=="18")
{
$team .="0020".","."4265".","."0494".","."0148".","."0225".","."2867";
}

if ($q=="19")
{
$team .="0033".","."0330".","."0016".","."2175".","."0067".","."1023";
}

if ($q=="20")
{
$team .="1730".","."0051".","."1086".","."0910".","."0045".","."1640";
}

if ($q=="21")
{
$team .="3683".","."0195".","."1241".","."1817".","."2013".","."0399";
}

if ($q=="22")
{
$team .="3478".","."2928".","."1718".","."2481".","."0340".","."0107";
}

if ($q=="23")
{
$team .="2590".","."3098".","."0447".","."1477".","."2056".","."2337";
}

if ($q=="24")
{
$team .="2175".","."0469".","."0027".","."0071".","."1741".","."0020";
}

if ($q=="25")
{
$team .="1732".","."0461".","."2468".","."2451".","."1640".","."0368";
}

if ($q=="26")
{
$team .="0011".","."1625".","."0494".","."1108".","."0033".","."1241";
}

if ($q=="27")
{
$team .="0179".","."1086".","."0233".","."3683".","."0067".","."0225";
}

if ($q=="28")
{
$team .="0624".","."2590".","."4488".","."0045".","."0074".","."1817";
}

if ($q=="29")
{
$team .="0118".","."0254".","."0107".","."0359".","."2867".","."0399";
}

if ($q=="30")
{
$team .="0868".","."0234".","."1718".","."1619".","."0148".","."0051";
}

if ($q=="31")
{
$team .="1806".","."2481".","."1023".","."1730".","."4265".","."0195";
}

if ($q=="32")
{
$team .="0125".","."1310".","."3478".","."0503".","."1114".","."3098";
}

if ($q=="0033")
{
$team .="2928".","."4039".","."0573".","."0016".","."1024".","."2056";
}

if ($q=="34")
{
$team .="1477".","."2614".","."0330".","."0340".","."0910".","."2013";
}

if ($q=="35")
{
$team .="0020".","."0399".","."0469".","."1732".","."0234".","."0051";
}

if ($q=="36")
{
$team .="0225".","."0447".","."1108".","."0254".","."2451".","."2175";
}

if ($q=="37")
{
$team .="1086".","."1718".","."0503".","."0461".","."2590".","."1741";
}

if ($q=="38")
{
$team .="0045".","."2481".","."2056".","."0071".","."0011".","."2337";
}

if ($q=="39")
{
$team .="2013".","."0494".","."1023".","."0359".","."2468".","."1619";
}

if ($q=="40")
{
$team .="1477".","."1730".","."0368".","."0125".","."2928".","."0624";
}

if ($q=="41")
{
$team .="2867".","."1625".","."0573".","."0148".","."0074".","."3478";
}

if ($q=="42")
{
$team .="1640".","."0016".","."3098".","."0027".","."0107".","."4265";
}

if ($q=="43")
{
$team .="0179".","."0340".","."0330".","."1024".","."0118".","."1241";
}

if ($q=="44")
{
$team .="0195".","."1310".","."0033".","."4488".","."0233".","."0868";
}

if ($q=="45")
{
$team .="1817".","."4039".","."0067".","."1806".","."1114".","."2614";
}

if ($q=="46")
{
$team .="3683".","."0071".","."0399".","."0910".","."0447".","."1625";
}

if ($q=="47")
{
$team .="2867".","."0234".","."0461".","."1023".","."1477".","."2928";
}

if ($q=="48")
{
$team .="0179".","."0254".","."0624".","."0494".","."2481".","."0469";
}

if ($q=="49")
{
$team .="2056".","."0573".","."0107".","."0233".","."1108".","."0051";
}

if ($q=="50")
{
$team .="0503".","."0033".","."1730".","."1619".","."0027".","."4039";
}

if ($q=="0051")
{
$team .="0340".","."0016".","."2337".","."1114".","."1086".","."0148";
}

if ($q=="52")
{
$team .="4488".","."1241".","."1741".","."1732".","."0067".","."1806";
}

if ($q=="53")
{
$team .="0074".","."0330".","."2175".","."0195".","."3098".","."0359";
}

if ($q=="54")
{
$team .="2013".","."0225".","."0045".","."1310".","."0118".","."1640";
}

if ($q=="55")
{
$team .="4265".","."0910".","."2451".","."1817".","."0125".","."0868";
}

if ($q=="56")
{
$team .="0368".","."0020".","."0011".","."2590".","."3683".","."3478";
}

if ($q=="57")
{
$team .="2468".","."1024".","."0071".","."2614".","."1718".","."0254";
}

if ($q=="58")
{
$team .="1741".","."4039".","."0494".","."0330".","."0233".","."1023";
}

if ($q=="59")
{
$team .="0469".","."2013".","."0148".","."3098".","."1806".","."0461";
}

if ($q=="60")
{
$team .="0910".","."2928".","."0359".","."0503".","."4488".","."0225";
}

if ($q=="61")
{
$team .="1241".","."2337".","."0868".","."1730".","."0107".","."0020";
}

if ($q=="62")
{
$team .="0051".","."0118".","."1477".","."3478".","."1024".","."4265";
}

if ($q=="63")
{
$team .="1108".","."0027".","."0067".","."2867".","."3683".","."0045";
}

if ($q=="64")
{
$team .="0399".","."1086".","."2468".","."2175".","."1310".","."0011";
}

if ($q=="65")
{
$team .="0074".","."1619".","."1640".","."2614".","."2056".","."0340";
}

if ($q=="66")
{
$team .="1625".","."1817".","."0368".","."0447".","."0179".","."0016";
}

if ($q=="67")
{
$team .="0624".","."2451".","."1114".","."1718".","."0195".","."0573";
}

if ($q=="68")
{
$team .="1732".","."2590".","."2481".","."0033".","."0125".","."0234";
}

if ($q=="69")
{
$team .="0910".","."1806".","."4488".","."2337".","."2175".","."0107";
}

if ($q=="70")
{
$team .="0118".","."0233".","."0359".","."0011".","."0461".","."2614";
}

if ($q=="71")
{
$team .="0027".","."0225".","."0051".","."1241".","."0447".","."0340";
}

if ($q=="72")
{
$team .="0503".","."0195".","."0071".","."0016".","."1477".","."0494";
}

if ($q=="73")
{
$team .="0033".","."2056".","."1741".","."4265".","."3683".","."1114";
}

if ($q=="0074")
{
$team .="0074".","."4039".","."3098".","."0234".","."2451".","."1086";
}

if ($q=="75")
{
$team .="1310".","."0368".","."1619".","."1024".","."0067".","."2481";
}

if ($q=="76")
{
$team .="2867".","."1108".","."1817".","."0469".","."1730".","."1718";
}

if ($q=="77")
{
$team .="1023".","."0045".","."0179".","."1732".","."0868".","."0573";
}

if ($q=="78")
{
$team .="2468".","."2013".","."0125".","."0020".","."0624".","."1625";
}

if ($q=="79")
{
$team .="2590".","."2928".","."0148".","."0330".","."1640".","."0254";
}

if ($q=="80")
{
$team .="3478".","."0067".","."0033".","."0399".","."0461".","."2337";
}

if ($q=="81")
{
$team .="0494".","."2175".","."0234".","."1024".","."1730".","."1114";
}

if ($q=="82")
{
$team .="1741".","."2867".","."0011".","."0195".","."0179".","."0910";
}

if ($q=="83")
{
$team .="0447".","."0107".","."1732".","."4039".","."2013".","."1086";
}

if ($q=="84")
{
$team .="0233".","."4265".","."0503".","."0074".","."1718".","."0368";
}

if ($q=="85")
{
$team .="3478".","."0225".","."1817".","."2468".","."2056".","."0330";
}

if ($q=="86")
{
$team .="0399".","."0573".","."0027".","."2590".","."2614".","."0125";
}

if ($q=="87")
{
$team .="2451".","."4488".","."1023".","."0148".","."0071".","."0118";
}

if ($q=="88")
{
$team .="0359".","."0051".","."1310".","."0016".","."1806".","."0624";
}

if ($q=="89")
{
$team .="2481".","."1640".","."0868".","."1477".","."1108".","."1625";
}

if ($q=="90")
{
$team .="0254".","."0020".","."0045".","."0340".","."1619".","."3098";
}

if ($q=="91")
{
$team .="0469".","."3683".","."2468".","."1241".","."2928".","."0503";
}

if ($q=="92")
{
$team .="0027".","."0148".","."1024".","."2013".","."0195".","."0011";
}

if ($q=="93")
{
$team .="0225".","."1741".","."0016".","."0461".","."1730".","."0074";
}

if ($q=="94")
{
$team .="0071".","."0107".","."1806".","."0330".","."0234".","."0368";
}

if ($q=="95")
{
$team .="1108".","."0179".","."1619".","."3478".","."4488".","."1114";
}

if ($q=="96")
{
$team .="1477".","."0020".","."1086".","."0573".","."0033".","."1817";
}

if ($q=="97")
{
$team .="3098".","."1732".","."1625".","."1718".","."0067".","."0118";
}

if ($q=="98")
{
$team .="0469".","."2590".","."0340".","."0868".","."4039".","."0359";
}

if ($q=="99")
{
$team .="0125".","."2481".","."0233".","."2867".","."0447".","."1640";
}

if ($q=="100")
{
$team .="4265".","."0045".","."0624".","."2175".","."0399".","."2928";
}

if ($q=="101")
{
$team .="2614".","."2337".","."3683".","."2451".","."0051".","."0494";
}

if ($q=="102")
{
$team .="0910".","."1023".","."1310".","."1241".","."0254".","."2056";
}























// Output "no team" if no team was found
// or output the correct values 
echo $team==="" ? "no team" : $team;

?>
