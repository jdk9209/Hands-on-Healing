<?php
//Start Hands On Healing
//1
$handsOnHealing = [];

//2
function addService($name, $category, $cost, $healingType, $duration)
{
	global $handsOnHealing;

	$service = array(
		"name" => $name,
		"category" => $category,
		"cost" => $cost,
		"healingType" => $healingType,
		"duration" => $duration	
	);

	array_push($handsOnHealing, $service);
}

//3
function listServices()
{
	global $handsOnHealing;

	foreach($handsOnHealing as $service)
	{
		echo $service['name'] . " with healing type " .  $service['healingType'] . " for " . $service['duration'];
	}
}

//4
addService("Therapeutic Massage", "Massage Therapy", 50, "Sports", "1 Hour");
addService("Chakra Balancing", "Energy Work", 75, "Reiki", "2 Hours");

//5
listServices();

//6
function updateService($name, $category, $cost, $healingType, $duration)
{
	global $handsOnHealing;

	foreach($handsOnHealing as $key => $service)
	{
		if ($service['name'] == $name)
		{
			$service['category'] = $category;
			$service['cost'] = $cost;
			$service['healingType'] = $healingType;
			$service['duration'] = $duration;

			$handsOnHealing[$key] = $service;
		}
	}
}

//7
updateService("Therapeutic Massage", "Swedish Massage", 100, "Relaxation", "1.5 Hours");

//8
listServices();

//9
function removeService($name)
{
	global $handsOnHealing;

	for($i = 0 ; $i < count($handsOnHealing); $i++)
	{
		if ($handsOnHealing[$i]['name'] == $name)
		{
			array_splice($handsOnHealing, $i, 1);
		}
	}
}

//10
removeService("Chakra Balancing");

//11
listServices();

//12
function searchByCategory($category)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//13
$massageTherapyServices = searchByCategory("Massage Therapy");

//14
foreach($massageTherapyServices as $service)
{
	echo $service['name'] . " " . $service['duration'];
}

//15
function searchByCost($minCost)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['cost'] >= $minCost)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//16
$expensiveServices = searchByCost(100);

//17
foreach($expensiveServices as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//18
function searchByType($healingType)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['healingType'] == $healingType)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//19
$sportsMassages = searchByType("Sports");

//20
foreach($sportsMassages as $service)
{
	echo $service['name'] . " " . $service['duration'];
}

//21
function getServiceByName($name)
{
	global $handsOnHealing;

	$service = [];

	foreach($handsOnHealing as $handsOnService)
	{
		if ($handsOnService['name'] == $name)
		{
			$service = $handsOnService;
			break;
		}
	}

	return $service;
}

//22
$therapeuticMassage = getServiceByName("Therapeutic Massage");

//23
echo $therapeuticMassage['name'] . " " . $therapeuticMassage['cost'];

//24
function priceRange($min, $max)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['cost'] >= $min && $service['cost'] <= $max)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//25
$cheapServices = priceRange(0, 50);

//26
foreach($cheapServices as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//27
function listServicesByCategoryAndCost($category, $minCost)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category && $service['cost'] >= $minCost)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//28
$massageTherapyServices = listServicesByCategoryAndCost("Massage Therapy", 50);

//29
foreach($massageTherapyServices as $service)
{
	echo $service['name'] . " " . $service['duration'];
}

//30
function searchByTypeAndDuration($healingType, $minDuration)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['healingType'] == $healingType && $service['duration'] >= $minDuration)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//31
$longReikiSessions = searchByTypeAndDuration("Reiki", 2);

//32
foreach($longReikiSessions as $service)
{
	echo $service['name'] . " " . $service['duration'];
}

//33
function searchByCostRange($min, $max)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['cost'] >= $min && $service['cost'] <= $max)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//34
$midRangeServices = searchByCostRange(50, 100);

//35
foreach($midRangeServices as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//36
function searchByCategoryAndDuration($category, $minDuration)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category && $service['duration'] >= $minDuration)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//37
$longMassageTherapyServices = searchByCategoryAndDuration("Massage Therapy", 1.5);

//38
foreach($longMassageTherapyServices as $service)
{
	echo $service['name'] . " " . $service['duration'];
}

//39
function searchByCostAndType($minCost, $healingType)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['healingType'] == $healingType && $service['cost'] >= $minCost)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//40
$expensiveReikiSessions = searchByCostAndType(75, "Reiki");

//41
foreach($expensiveReikiSessions as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//42
function searchByCategoryAndType($category, $healingType)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category && $service['healingType'] == $healingType)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//43
$sportsMassages = searchByCategoryAndType("Massage Therapy", "Sports");

//44
foreach($sportsMassages as $service)
{
	echo $service['name'] . " " . $service['duration'];
}

//45
function searchByCostRangeAndType($min, $max, $healingType)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['cost'] >= $min && $service['cost'] <= $max && $service['healingType'] == $healingType)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//46
$mediumRangeReikiSessions = searchByCostRangeAndType(50, 100, "Reiki");

//47
foreach($mediumRangeReikiSessions as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//48
function searchByCategoryAndDurationAndType($category, $minDuration, $healingType)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category && $service['duration'] >= $minDuration && $service['healingType'] == $healingType)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//49
$longReikiMassages = searchByCategoryAndDurationAndType("Massage Therapy", 2, "Reiki");

//50
foreach($longReikiMassages as $service)
{
	echo $service['name'] . " " . $service['duration'];
}

//51
function searchByCategoryAndDurationAndCost($category, $minDuration, $minCost)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category && $service['duration'] >= $minDuration && $service['cost'] >= $minCost)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//52
$expensiveMassageTherapyServices = searchByCategoryAndDurationAndCost("Massage Therapy", 1.5, 50);

//53
foreach($expensiveMassageTherapyServices as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//54
function searchByTypeAndDurationAndCost($healingType, $minDuration, $minCost)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['healingType'] == $healingType && $service['duration'] >= $minDuration && $service['cost'] >= $minCost)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//55
$expensiveReikiSessions = searchByTypeAndDurationAndCost("Reiki", 2, 75);

//56
foreach($expensiveReikiSessions as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//57
function searchByCategoryAndTypeAndCost($category, $healingType, $minCost)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category && $service['healingType'] == $healingType && $service['cost'] >= $minCost)
		{
			array_push($servicesMatching, $service);
		}
	}

	return $servicesMatching;
}

//58
$expensiveSportsMassages = searchByCategoryAndTypeAndCost("Massage Therapy", "Sports", 50);

//59
foreach($expensiveSportsMassages as $service)
{
	echo $service['name'] . " " . $service['cost'];
}

//60
function searchByCategoryAndTypeAndDuration($category, $healingType, $minDuration)
{
	global $handsOnHealing;

	$servicesMatching = [];

	foreach($handsOnHealing as $service)
	{
		if ($service['category'] == $category && $service['healingType'] == $healingType && $service