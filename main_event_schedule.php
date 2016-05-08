<?php	
	include_once '../PokerIrelandSystem/core/init.inc.php';
	$page_title = " PokerIreland | Main Event Blind Structure";
	include_once 'header.php';
?>

<?php 
$blind_day1_array = array(
			1=>array("12:00-12:40","Level 1","25-50"),
			2=>array("12:40-13:20","Level 2","50-100"),
			3=>array("13:20-14:00","Level 3","70-150"),
			4=>array("14:00-14:15","Break",""),
			5=>array("14:15-14:55","Level 4","100-200"),
			6=>array("14:55-15:35","Level 5","150-300"),
			7=>array("15:35-16:15","Level 6","150-300 25"),
			8=>array("16:15-16:30","Break"," "),
			9=>array("16:30-17:10"," Level 7","200-400 25"),
			10=>array("17:10-17:50","Level 8","300-600 50"),
			11=>array("17:50-18:30","Level 9","400-800 75 Race-Off 25's"),
			12=>array("18:30-19:30","Dinner Break",""),
			13=>array("19:30-20:10","Level 10","500-1,000 100"),
			14=>array("20:10-20:50","Level 10","600-1,200 100"),
			15=>array("20:50-21:30","Level 11","800-1,600 100"),
			16=>array("21:30-21:45","Break",""),
			17=>array("21:45-22:25","Level 12","1,000-2,000 200"),
			18=>array("22:25-23:05","Level 13","1,200-2,400 200"),
			19=>array("23:05-23:45","Level 14","1,500-3,000 300"),
			20=>array("23:45-00:00","Break",""),
			21=>array("00:00-00:40","Level 15","2,000-4,000 400 Race-Off 100's"),
			22=>array("00:40-01:20","Level 16","2,500-5,000 500"));
			
			
			$blind_day2_array = array(
			1=>array("12:00-12:40","Level 17","3,000-6,000 500"),
			2=>array("12:40-13:20","Level 18","4,000-8,000 500"),
			3=>array("13:20-14:00","Level 19","5,000-10,000 1000"),
			4=>array("14:00-14:15","Break",""),
			5=>array("14:15-14:55","Level 20","6,000-12,000 1000"),
			6=>array("14:55-15:35","Level 21","8,000-16,000 1000"),
			7=>array("15:35-16:15","Level 22","10,000-20,000 2,000"),
			8=>array("16:15-16:30","Break"," "),
			9=>array("16:30-17:30"," Level 23","12,000-24,000 2,000"),
			10=>array("17:30-18:30","Level 24","15,000-30,000 3000"),
			11=>array("18:30-19:30","Level 25","20,000-40,000 4000"),
			12=>array("19:30-20:10","Dinner Break",""),
			13=>array("20:10-21:10","Level 26","30,000-60,000 6000"),
			14=>array("21:10-22:10","Level 27","40,000-80,000 8000"),
			15=>array("22:10-22:20","Break",""),
			16=>array("22:20-23:20","Level 28","50,000-100,000 10000 "),
			17=>array("23:20-00:20","Level 29","60,000-120,000 12000"),
			18=>array("00:20-00:30","Break",""),
			19=>array("00:30-01:30","Level 30","80,000-160,000 16000"));
			
			$blind_day3_array = array(
			1=>array("12:00-13:00","Level 31","100,000-200,000"),
			2=>array("13:00-14:00","Level 32","120,000-240,000"),
			3=>array("14:00-14:10","Break",""),
			4=>array("14:10-15:10","Level 33","150,000-300,000"),
			5=>array("15:10-16:10","Level 34","200,000-400,000"),
			6=>array("16:10-16:20","Break",""),
			7=>array("16:20-17:20","Level 35","250,000-500,000 "),
			8=>array("17:20-18:20","Level 36","300,000-600,000"),
			9=>array("18:20-19:00","Dinner Break",""),
			10=>array("19:00-20:00","Level 37","400,000-800,000"),
			11=>array("20:00-21:00","Level 38","500,000-1,000,000"),
			12=>array("21:00-21:10","Break",""),
			13=>array("21:10-22:10","Level 39","600,000-1,200,000"),
			14=>array("22:10-23:10","Level 40","800,000-1,600,000"),
			15=>array("23:10-23:20","Break",""),
			16=>array("23:20-00:20","Level 41","1,000,000-2,000,000"));
			
			
			
			$count = 0;
			$markup = '';
			$markup.='
			<table width="100%">
			<tr>
			<td colspan="3" class="ipo_day">Day 1A & 1B (Friday 19th & Saturday 20th Oct)</td>
			</tr>
			<tr class="header_row">
			<td>Time</td>
			<td>Blinds</td>
			<td>Ante</td>
			</tr>';
			foreach($blind_day1_array as $blind_day1)
			{
				if($count%2 == 0) $markup.='<tr class="ipo_row_even">';
				else $markup.='<tr class="ipo_row_odd">';
				foreach($blind_day1 as $b_line)
				{
					$markup.='<td class="ipo_td">'.$b_line.'</td>';
				}
				$markup.='</tr>';
				$count++;
			}
			$markup.='</table></br>';
			
			
			
			
			
			
			
			
			
			
			$count = 0;
			$markup.='
			<table width="100%">
			<tr>
			<td colspan="3" class="ipo_day">Day 2 (Sunday 21st Oct)</td>
			</tr>
			<tr class="header_row">
			<td>Time</td>
			<td>Blinds</td>
			<td>Ante</td>
			</tr>';
			foreach($blind_day2_array as $blind_day1)
			{
				if($count%2 == 0) $markup.='<tr class="ipo_row_even">';
				else $markup.='<tr class="ipo_row_odd">';
				foreach($blind_day1 as $b_line)
				{
					$markup.='<td class="ipo_td">'.$b_line.'</td>';
				}
				$markup.='</tr>';
				$count++;
			}
			$markup.='</table></br>';
			
			
			
			
			
			
			
			
			
			
			
			
			
			$count = 0;
			$markup.='
			<table width="100%">
			<tr>
			<td colspan="3" class="ipo_day">Day 3 (Saturday 10th Nov 2011)</td>
			</tr>
			<tr class="header_row">
			<td>Time</td>
			<td>Blinds</td>
			<td>Ante</td>
			</tr>';
			foreach($blind_day3_array as $blind_day1)
			{
				if($count%2 == 0) $markup.='<tr class="ipo_row_even">';
				else $markup.='<tr class="ipo_row_odd">';
				foreach($blind_day1 as $b_line)
				{
					$markup.='<td class="ipo_td">'.$b_line.'</td>';
				}
				$markup.='</tr>';
				$count++;
			}
			$markup.='</table>';
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			$markup.='
			</td>
			<td id="IPO_right">
			<div class="twitter_block">
			<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: \'profile\',
			  rpp: 15,
			  interval: 30000,
			  width: 350,
			  height: 600,
			  theme: {
				shell: {
				  background: \'#990000\',
				  color: \'#ffffff\'
				},
				tweets: {
				  background: \'#fff\',
				  color: \'#333333\',
				  links: \'#990000\'
				}
			  },
			  features: {
				scrollbar: true,
				loop: false,
				live: true,
				behavior: \'all\'
			  }
			}).render().setUser(\'Ste_Mc_Lean\').start();
			</script>
			</div>';
 

			
			
			
			
			$markup.='
			</td>
			</tr>
			</table>
			</div>';
			
			echo $markup;
	
?>

<?php include_once 'footer.php'; ?>

