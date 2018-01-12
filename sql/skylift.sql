-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 07:19 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skylift`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(20) NOT NULL,
  `car_id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `fuel` text NOT NULL,
  `description` text NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `pick_time` text NOT NULL,
  `drop_date` varchar(20) NOT NULL,
  `drop_time` text NOT NULL,
  `pick_location` text NOT NULL,
  `drop_location` text NOT NULL,
  `type` text NOT NULL,
  `mileage` varchar(11) NOT NULL,
  `price` varchar(50) NOT NULL,
  `passengers` int(10) NOT NULL,
  `doors` int(10) NOT NULL,
  `bags` int(10) NOT NULL,
  `airconditioner` int(10) NOT NULL,
  `powerdoorlocks` int(10) NOT NULL,
  `powersteering` int(10) NOT NULL,
  `antilockbrakingsys` int(10) NOT NULL,
  `brakeassist` int(10) NOT NULL,
  `driverairbag` int(10) NOT NULL,
  `passengerairbag` int(10) NOT NULL,
  `powerwindow` int(10) NOT NULL,
  `cdplayer` int(10) NOT NULL,
  `centrallocking` int(10) NOT NULL,
  `crashcensor` int(10) NOT NULL,
  `automatictransmission` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_id`, `name`, `fuel`, `description`, `pick_date`, `pick_time`, `drop_date`, `drop_time`, `pick_location`, `drop_location`, `type`, `mileage`, `price`, `passengers`, `doors`, `bags`, `airconditioner`, `powerdoorlocks`, `powersteering`, `antilockbrakingsys`, `brakeassist`, `driverairbag`, `passengerairbag`, `powerwindow`, `cdplayer`, `centrallocking`, `crashcensor`, `automatictransmission`) VALUES
(11, 'car_1515234214', 'Toyota Avalon Hybrid', 'Petrol', 'The current Toyota Avalon Hybrid comes in XLE Premium, XLE Touring and Limited trim levels. All are powered by a 156-horsepower 2.5-liter four-cylinder that joins forces with an electric motor to bring total output up to 200 hp. A continuously variable transmission (CVT) routes power to the front wheels. Despite the reduction in power compared to the standard Avalon\'s V6, the Avalon Hybrid still accelerates to 60 mph in an admirable 7.7 seconds -- only about a second slower than the V6 model.\r\n\r\nXLE Premium feature highlights include keyless ignition and entry, dual-zone automatic climate control, leather upholstery, heated front seats, a rearview camera and an eight-speaker audio system with USB/iPod integration. The XLE Touring perks include driver seat memory functions, a navigation system and Toyota\'s Entune smartphone app integration system. The Limited tops it off with xenon headlights, upgraded leather upholstery, ventilated front seats, heated rear seats and an 11-speaker JBL premium sound system. Adaptive cruise control and adaptive high-beam headlights are optional for the Limited.', '01/17/2018', '2:00pm', '01/20/2018', '2:00pm', 'Nairobi Downtown', 'Nairobi Downtown', 'Compact', '1000', '250', 4, 4, 2, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1),
(12, 'car_1515234519', 'Bmw Mini', 'Diesel', 'When it comes to achieving truly athletic handling in a subcompact car, the Mini Cooper is one of the best there is. Its turbo engines offer various levels of zoom, and its responsive steering and excellent grip give this little car a feeling of zippiness typically reserved for larger hatchbacks. Between its performance, comfy front seats, and appealing infotainment system, the Cooper\'s focus is clearly on satisfying the driver and front-seat passenger, leaving rear-seat passengers with little room (though the larger Hardtop 4 Door has a pinch more legroom in back). Cargo space is similarly limited behind the back seat.', '01/20/2018', '12:30pm', '01/25/2018', '12:30pm', 'Nairobi Airport', 'Nairobi Airport', 'Intermediate', '2000', '150', 2, 2, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1),
(13, 'car_1515254884', 'Toyota Avalon Hybrid', 'Petrol', 'The Toyota Avalon is a full-size car produced by Toyota in the United States, and is Toyota\'s largest front-wheel-drive sedan in the United States, Canada, Puerto Rico, and the Middle East. It was also produced in Australia from April 2000 until June 2005, when it was replaced in November 2006 by the Toyota Aurion. The first production Avalon rolled off the TMMK assembly line in Georgetown, Kentucky, in September 1994.[1] A second-generation model was released in the United States and Japan in 1999.\r\n\r\nToyota marketed the Avalon as a replacement for the Toyota Cressida, a model discontinued for the American market in 1992. While the Cressida was an upper-level midsize rear-wheel-drive car with a straight-six engine, the Avalon is front-wheel-drive, powered by a V6 engine. In recent years, there has been considerable overlapping with its platform mates, the Toyota Camry V6 and the Lexus ES, although the third-generation Avalon was distinguished by offering extra legroom.[2] For its fourth generation, the Avalon was introduced on a platform that is shared with the Lexus ES.[3]\r\n\r\nAs of 2013, the Toyota Avalon is available in the United States, Canada, Puerto Rico, South Korea, and the Middle East.', '01/20/2018', '12:00pm', '01/25/2018', '12:00pm', 'Nairobi Downtown', 'Nairobi Downtown', 'Compact', '1000', '300', 4, 4, 2, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 0, 1),
(14, 'car_1515255665', 'Bmw Mini', 'Petrol', 'Although this is the Big MINI, it\'s fairly small as SUVs go. Put it next to a regulation MINI Cooper and it looks large (and for this updated model, it actually was slightly increased in size). Park it next to Chevy Suburban and, well, you know ... it\'s a small-ish thing. That said, the Countryman does provide a nice middle ground between a compromised compact luxury SUV and a bulkier mid-size vehicle.\r\n\r\nBeyond that, in a world of same-old-same-old when it comes to SUV design (with a few exceptions, such as the new Jaguar F-PACE), the Countryman is notably stylish and hip. I felt cool driving around in it, and not quite as fussy as I have in some of MINI\'s smaller rides.\r\n\r\nOne quick thought about the all-wheel-drive system: It\'s great! It also doesn\'t call much attention to itself. Nor does it doom gas mileage: you\'ll get an EPA-rated 21 city/31 highway/24 combined, which is respectable for a crossover that can cover the 0-60 mph sprint in about 7 seconds.', '01/10/2018', '1:00pm', '01/10/2018', '1:00pm', 'Nairobi Airport', 'Nairobi Airport', 'Intermediate', '2000', '250', 2, 2, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1),
(15, 'car_1515258544', 'Subaru Forester', 'Diesel', 'Because of its long suspension travel and higher ride height, the Forester certainly had the measure of the standard sedans, hatches and wagons when the going got tough, whether on Australia’s rough roads or beyond them. Its car-like driving experience is because the Forester is based on the Impreza sedan and wagon, which debuted here in 1993. These days, the Forester continues the same formula, growing larger, safer and more powerful through successive generations.', '01/17/2018', '11:30am', '01/22/2018', '11:30am', 'Nairobi Airport', 'Nairobi Airport', 'Compact', '2978', '200', 4, 4, 2, 1, 1, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1),
(16, 'car_1515259016', '2014 Mazda 3', 'Petrol', 'The acrobatic Miata may be Mazda’s poster child for fun, affordable driving, but the company’s true star is the 3. Since the 3 went on sale a decade ago, it’s been a consistent benchmark for sporty compact sedans and hatchbacks, racking up more sales than any other Mazda—and during some periods, more sales than all other Mazdas. Put simply, the Mazda 3 is to compacts what the BMW 3-series is to sports sedans. What you see here is the all-new third-generation Mazda 3 hatchback, although it will be offered in two body styles. Buyers will also have the ability to choose from among two engines and two transmissions.', '01/11/2018', '1:00pm', '01/11/2018', '1:00pm', 'hilton hotel', 'jkia', 'Economy', '2000', '200', 4, 4, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `id` int(20) NOT NULL,
  `car_id` varchar(20) NOT NULL,
  `img1` varchar(20) NOT NULL,
  `img2` varchar(20) NOT NULL,
  `img3` varchar(20) NOT NULL,
  `img4` varchar(20) NOT NULL,
  `img5` varchar(20) NOT NULL,
  `img6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`id`, `car_id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(1, 'car_1515234214', 'img11515234214.jpg', 'img21515234214.jpg', 'img31515234214.jpg', 'img41515234214.jpg', 'img51515234214.jpg', 'img61515234214.jpg'),
(2, 'car_1515234519', 'img11515234519.jpg', 'img21515234519.png', 'img31515234519.jpg', 'img41515234519.jpg', 'img51515234519.jpg', 'img61515234519.jpg'),
(3, 'car_1515254884', 'img11515254884.jpg', 'img21515254884.jpg', 'img31515254884.jpg', 'img41515254884.jpg', 'img51515254884.jpg', 'img61515254884.jpg'),
(4, 'car_1515255665', 'img11515255665.jpg', 'img21515255665.jpg', 'img31515255665.jpg', 'img41515255665.jpg', 'img51515255665.png', 'img61515255665.jpg'),
(5, 'car_1515258544', 'img11515258544.jpg', 'img21515258544.jpg', 'img31515258544.jpg', 'img41515258544.jpg', 'img51515258544.jpg', 'img61515258544.jpg'),
(6, 'car_1515259016', 'img11515259016.jpg', 'img21515259016.jpg', 'img31515259016.png', 'img41515259016.jpg', 'img51515259016.jpg', 'img61515259016.png');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `id` int(20) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`id`, `type`) VALUES
(1, 'Economy'),
(2, 'Intermediate'),
(3, 'Compact'),
(4, 'Mini car'),
(5, 'Full size'),
(6, 'Luxury');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `duration` text NOT NULL,
  `overview` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `included` text NOT NULL,
  `not_included` text NOT NULL,
  `image` text NOT NULL,
  `adventure` int(10) NOT NULL,
  `honeymoon` int(10) NOT NULL,
  `art_culture` int(10) NOT NULL,
  `holidays` int(10) NOT NULL,
  `road_trips` int(10) NOT NULL,
  `gear_tech` int(10) NOT NULL,
  `food_drinks` int(10) NOT NULL,
  `budget` int(10) NOT NULL,
  `bag_packing` int(10) NOT NULL,
  `festivals` int(10) NOT NULL,
  `wildlife_travel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `country`, `city`, `duration`, `overview`, `price`, `latitude`, `longitude`, `included`, `not_included`, `image`, `adventure`, `honeymoon`, `art_culture`, `holidays`, `road_trips`, `gear_tech`, `food_drinks`, `budget`, `bag_packing`, `festivals`, `wildlife_travel`) VALUES
(9, 'Giza Pyramids, Sphinx, Memphis, Sakkara', 'Egypt', 'Al-Dschiza, Ãƒâ€žgypten', '8 hours', 'Step back in time to the days of ancient Egypt on a private tour of the Great Pyramids of Giza and Sphinx, the necropolis of Sakkara and the former capital, Memphis. With your own private Egyptologist guide to lead the way on this private tour, you can determine the amount of time you\'d like to spend at each of the sites you\'ll visit.\r\n\r\nThe Giza Plateau is only around 30 minutes from Cairo, where your qualified Egyptologist guide will provide a fascinating introduction to each of the three pyramids: Cheops, Khafre and Menakaure. You will have free time to enter one of the pyramids (additional cost), though your guide is not permitted to enter with you, or take a camel ride (additional cost). After visiting the pyramids, you\'ll continue across the plateau for a photo opportunity of the three pyramids rising from the sands, with the Cairo skyline in the background. A short drive to the city side of the plateau finds you standing at the feet of the Sphinx, for thousands of years the enigmatic symbol of Egypt. Also in Giza you may visit the Solar Boat Museum (optional), home to the remarkably well preserved funerary boat of Khufu. Your next stop is Sakkara, home of Egypt\'s oldest pyramid, built in 2650 B.C. Your guide will provide a brief history of the famous Step Pyramid and you\'ll have free time to walk around. Your final stop is Memphis, the ancient capital of Egypt. Here you will see artifacts from many of the great rulers of Egypt, including the fallen statue of Ramses II. You will also have the chance to visit a Papyrus Institute to see how the famous artwork is made.', '86', '29.9772962', '31.1324955', 'Qualified Egyptologist guide\r\nEntrance to the Giza site\r\nEntrance to the Sakkara site\r\nLunch (if option selected)\r\nHotel pickup and drop off\r\nTransport by air-conditioned minivan\r\nEntrance to the Solar Boat Museum (if option selected)', 'Gratuities (recommended)\r\nFood and drinks, unless specified\r\nEntrance to inside of the Pyramids (approximately EGP 40-100)\r\nCallSend SMSAdd to SkypeYou\'ll need Skype CreditFree via Skype', 'Giza Pyramids, Sphinx, Memphis, Sakkara-1515612005.jpg', 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0),
(10, 'Cape Peninsula Tour', 'South Africa', 'Cape Town', '8 hours', 'ee all the top sights along South AfricaÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s Cape Peninsula on this full-day tour from Cape Town. With a mix of independent sightseeing and guided visits, youÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ll have the flexibility to do the things you want to do, plus learn about the region from your expert guide. Explore Hout Bay and take an optional boat trip to Duiker Island. Spend time at leisure in Cape of Good Hope Nature Reserve and visit SimonÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s Town on the peninsulaÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s east coast ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ home to a colony of African penguins! On the drive back you will have time to stop for a walk at Kirstenbosch Botanical Gardens.\r\n\r\nLeave your Cape Town hotel by air-conditioned minibus and head south along the Cape Peninsula to Hout Bay ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ a coastal neighborhood that sits roughly halfway between Cape Town and Cape Point. Now popular as an upmarket seaside resort, Hout Bay is a fishing village and has retained its friendly, small-town appeal. Enjoy time at leisure here ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ perhaps exploring independently or visiting nearby Duiker Island (own expense) to see its colony of gorgeous Cape fur seals.Continue via Chapmans Peak to the southernmost edge of the Cape Peninsula at the far end of Table Mountain National Park to reach Cape of Good Hope Nature Reserve. With roughly 1.5 hours at leisure here, you can explore on your own or perhaps visit one of the reserveÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s cafes for lunch (own expense). Time permitting, stroll down to Cape Point to see the actual tip of the peninsula where the Atlantic and Indian oceans collide.On the way back to Cape Town, visit SimonÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s Town on the False Bay Coast for a look around and head to BoulderÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s Beach (entry at own expense) to see the townÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s cute colony of African penguins. Return to your Cape Town hotel via the pretty towns of Fish Hoek and Muizenberg with your final stop at Kirstenbosch Botanical Gardens -- set at the foot of Table Mountain -- and explore its stunning grounds with your guide. Kirstenbosch grows vegetation and fauna that are totally unique to the Cape Floral Region and the site was declared a UNESCO World Heritage Site in 2004. See the rare plants and trees on a walk around the WesternÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s Capes very own botanical wonderland.', '96', '-34.19345', '18.433789', 'Entrance fees\r\nHotel pickup and drop off\r\nProfessional guide', 'Gratuities (optional)\r\nFood and drinks, unless specified\r\nOptional visit to penguin colony', 'Cape Peninsula Tour-1515612181.jpg', 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(11, 'Marrakech valleys', 'Morroco', 'Atlas mountains', '', 'Escape the hustle and bustle of Marrakech and head for the breathtaking Atlas Mountains, visiting the 4 valleys that make the region famous: Ourika, Oukaimeden, Sidi Fares, and Asni valleys, discover more captivating scenery by continuing on to beautiful Takerkoust Lake and the huge Kik Plateau. You\'ll also experience traditional Berber culture along the way!\r\n\r\nAfter morning pickup from your Marrakech hotel or riad, travel with your small group in a comfortable and air conditioned 4x4 vehicle or minivan with an experienced english speaking guide through the majestic Atlas Mountains.\r\n\r\nAdmire towering snow-topped peaks on your 1-hour drive to the first valley Ourika, famous by its waterfalls, this lush valleyâ€™s waterfalls are a lovely counterpoint to the surrounding landscape and the guided visit will help you to fully explore this waterfalls with your expert mountain guide, about 1hr 30 min walk for going and coming back (if you arenâ€™t interested by the walk you can have a drink in the small cafes beside the river), you will enjoy different landscapes and get spectacular views, in this valley you will have the opportunity to visit the Berber women extracting the argan oil (the unique Moroccan oil).\r\n\r\nContinue through the second valley which is Oukaimeden valley (Ski resort), and taking a secluded mountain road standing at 1800 meters above sea level to reach the third valley of this tour which is Sidi Fares, you will pass through traditional Berber villages built from adobe and stones, and to discover the authentic life of Berber people and culture and will arrange a delicious lunch for you (Moroccan salad or soup, Berber tagine, Moroccan couscous, dessert and drinks) in a typical Berber house. Afterward, head toward the fourth valley that is Asni, famous by its fruit trees (Apples, walnut, almonds, peaches...), have your camera ready to take pictures of highest peak in North Africa, the Toubkal mount with 13 665 feet. \r\n\r\nAt this point, head back to Marrakech or, if youâ€™ve chosen the extended option, continue your journey into the Moroccan countryside for another hour. Travel to Takerkoust Lake, a serene sapphire-blue artificial lake popular with locals, then, pass wheat fields and villages on your way to the Kik Plateau, a distinctive limestone outcropping in the Atlas Mountains that offers wonderful views of the lush valleys below. Return to Marrakech and conclude your thrilling tour through the Atlas mountains with drop-off at your hotel at approximately 5pm.', '84', '31.3745358', '-7.7905758', 'Hotel pickup and drop-off\r\nTransport by air-conditioned minivan or 4WD with an English speaking guide\r\nTrekking tour in the mountains\r\nTypical Lunch in a local Berber family house (salad or soup+berber tagine+couscous+dessert+drinks)\r\nProfessional mountain trekking guide\r\nAll entrance fees\r\nLocal taxes\r\nFuel included\r\nDrinks', 'Gratuities (optional', 'Marrakech valleys-1515621686.jpg', 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1),
(12, 'Maasai mara reserve', 'Kenya', 'Nairobi', '3 days', 'Travel through the Great Rift Valley on to our safari lodge in Kenya\'s premier wildlife reserveâ€”the Masai Mara. Explore diverse wilderness crossing rolling plains spotted with famous acacia trees. Your wildlife safari drives are spread out over all three days, with excellent chances of seeing the Big Fiveâ€”lions, leopards, buffalo, elephants and rhinos. The varied wildlife and natural environment, in addition to the culture of the local Masai people, come together to provide a spectacular private safari experience.', '200', '-1.0763397', '35.8690581', 'Entrance and wildlife safari drives in the Masai Mara Game Reserve\r\nAll transport between destinations and to/from included activities', '', 'Maasai mara reserve-1515622226.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(13, 'Cape Point Sightseeing Tour', 'South Africa', 'Cape Town', '5 hours', 'Take a scenic drive down to the stunning Cape Point, part of the Table Mountain National Park, a UNESCO World Heritage Site. This half day tour is the easiest way to see some of the most spectacular scenery in South Africa, taking in the Chapmans Peak coastal road, Hout Bay Harbour, and the African Penguin Colony at Boulders Beach.\r\n\r\nStart your half day tour to the Cape Point by driving along the rugged Atlantic coastline with its towering mountains and white sandy beaches. Soon, you will arrive in Hout Bay, the historical harbour and fishing point, overlooked by the impressive Sentinal peak. From here, you will begin the spectacular coastal drive along the world-famous Chapmans Peak Road. This road hugs the near vertical mountain face between Hout Bay and Noordhoek. Arriving at the Cape of Good Hope Nature reserve, where you will make your way down to Cape Point. This rocky outcrop was known as the Cape of Storms due to the number of vessels that where shipwrecked along the coastline. You will have the opportunity to walk to the old lighthouse at the Point. Returning from Cape Point you will follow the coastal road along False Bay, through the historic navy base, Simons Town. You will then have the chance to stop and view the world famous African Penguin colony at Boulders beach (at own expense and time permitting). Then pass through then popular holiday resort, of Muizenburg before return to the Cape Town City Centre.', '65', '-34.3566871', '18.4967666', 'Entrance fees\r\nHotel pickup and drop off (selected hotels only)\r\nProfessional guide', 'Gratuities (optional)\r\nFood and drinks, unless specified\r\nOptional visit to penguin colony', 'Cape Point Sightseeing Tour-1515622739.jpg', 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(20) NOT NULL,
  `leaving_from` text NOT NULL,
  `going_to` text NOT NULL,
  `depart_date` text NOT NULL,
  `arrive_date` text NOT NULL,
  `depart_time` varchar(50) NOT NULL,
  `arrive_time` varchar(50) NOT NULL,
  `total_time` varchar(20) NOT NULL,
  `airline` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `trip` text NOT NULL,
  `wifi` int(10) NOT NULL,
  `entertainment` int(10) NOT NULL,
  `tv` int(10) NOT NULL,
  `airconditioner` int(10) NOT NULL,
  `coffee` int(10) NOT NULL,
  `food` int(10) NOT NULL,
  `drink` int(10) NOT NULL,
  `wine` int(10) NOT NULL,
  `comfort` int(10) NOT NULL,
  `magazines` int(10) NOT NULL,
  `shopping` int(10) NOT NULL,
  `games` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `leaving_from`, `going_to`, `depart_date`, `arrive_date`, `depart_time`, `arrive_time`, `total_time`, `airline`, `price`, `trip`, `wifi`, `entertainment`, `tv`, `airconditioner`, `coffee`, `food`, `drink`, `wine`, `comfort`, `magazines`, `shopping`, `games`) VALUES
(2, 'Nairobi', 'South Africa', '01/10/2018', '01/10/2018', '11:00am', '11:00pm', '12 Hours', 'Kenya Airways', '450', 'one way', 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1),
(3, 'Nairobi', 'South Africa', '01/10/2018', '01/10/2018', '7:00am', '11:30pm', '4 Hours 30 Minutes', 'Kenya Airways', '300', 'one way', 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0),
(4, 'Dubai', 'New York', '01/15/2018', '01/15/2018', '4:30am', '12:00pm', '7 Hours 30 Minutes', 'Emirates', '400', 'one way', 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0),
(5, 'Nairobi', 'Eldoret', '01/08/2018', '01/08/2018', '6:30pm', '7:10pm', '40 minutes', 'Jambo Jet', '150', 'one way', 0, 0, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0),
(6, 'Addis Ababa', 'Algiers', '01/20/2018', '01/21/2018', '7:00pm', '4:00am', '10 Hours', 'Ethiopian Airline', '500', 'round trip', 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight_desc`
--

CREATE TABLE `flight_desc` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `logo` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_desc`
--

INSERT INTO `flight_desc` (`id`, `name`, `description`, `logo`, `image`) VALUES
(1, 'Kenya Airways', 'Kenya Airways Ltd., more commonly known as Kenya Airways, is the flag carrier of Kenya.The company was founded in 1977, after the dissolution of East African Airways. The carrier\'s head office is located in Embakasi, Nairobi, with its hub at Jomo Kenyatta International Airport.\r\n\r\nThe airline was wholly owned by the Government of Kenya until April 1995, and it was privatised in 1996, becoming the first African flag carrier to successfully do so. Kenya Airways is currently a public-private partnership. The largest shareholder is the Government of Kenya (48.9%), 38.1% is owned by KQ Lenders Company 2017 Ltd.(in turn owned by a consortium of banks), followed by KLM, which has, a minimal, 7.8% stake in the company. The rest of the shares are held by private owners; shares are traded on the Nairobi Stock Exchange, the Dar es Salaam Stock Exchange, and the Uganda Securities Exchange.\r\n\r\nAt January 2013 Kenya Airways was considered one of the leading Sub-Saharan operators. It was ranked fourth among the top ten African airlines by seat capacity, behind South African Airways, Ethiopian Airlines and EgyptAir. The airline became a full member of SkyTeam in June 2010, and is also a member of the African Airlines Association since 1977.', 'logo1515251505.jpg', 'img1515251505.jpg'),
(2, 'Emirates', 'Emirates (Arabic: Ø·ÙŽÙŠÙŽØ±Ø§Ù† Ø§Ù„Ø¥Ù…Ø§Ø±Ø§Øªâ€Ž DMG: á¹¬ayarÄn Al-ImÄrÄt) is an airline based in Dubai, United Arab Emirates. The airline is a subsidiary of The Emirates Group, which is wholly owned by the government of Dubai\'s Investment Corporation of Dubai.[3] It is the largest airline in the Middle East,[4] operating over 3,600 flights per week from its hub at Dubai International Airport, to more than 140 cities in 81 countries across six continents.[5] Cargo activities are undertaken by Emirates SkyCargo.[6]\r\n\r\n\r\nAn Emirates A380-800 (A6-EUE) taking off from New York JFK Airport. Emirates is the largest operator of the plane.\r\nEmirates is the world\'s fourth largest airline by scheduled revenue passenger-kilometers flown,[7] the fourth-largest in terms of international passengers carried,[8] and the second-largest in terms of freight tonne kilometers flown. Emirates had the longest non-stop commercial flight from Dubai to Auckland until it was surpassed by Qatar Airways flying from Doha to Auckland.\r\n\r\nDuring the mid-1980s, Gulf Air began to cut back its services to Dubai. As a result, Emirates was conceived in March 1985 with backing from Dubai\'s royal family, with Pakistan International Airlines providing two of the airline\'s first aircraft on wet-lease. With $10 million in start-up capital it was required to operate independently of government subsidy. Pakistan International Airlines provided training facilities to Emirates\' cabin crew in its academy. The airline was headed by Ahmed bin Saeed Al Maktoum, the airline\'s present chairman. In the years following its founding, the airline expanded both its fleet and its destinations. In October 2008, Emirates moved all operations at Dubai International Airport to Terminal 3.[9]\r\n\r\nEmirates operates a mixed fleet of Airbus and Boeing wide-body aircraft and is one of the few airlines to operate an all-wide-body aircraft fleet. As of November 2017, Emirates is the largest Airbus A380 operator with 100 planes in service and a further 42 in orders. Since their introduction, the Airbus A380 has become an integral part of Emirates fleet, especially on long-haul high-traffic routes. Emirates is also the world\'s largest Boeing 777 operator with over 130 planes in service.', 'logo1515251717.jpg', 'img1515251717.jpg'),
(3, 'Rwandair', 'RwandAir Limited is the flag carrier airline of Rwanda.[4] It operates domestic and international services to East Africa, Central Africa, West Africa, Southern Africa, Europe and the Middle East from its main base at Kigali International Airport in Kigali.', 'logo1515252135.png', 'img1515252135.jpg'),
(4, 'Scandinavian(SAS)', 'Scandinavian Airlines, usually known as SAS, is the flag carrier of Sweden, Norway and Denmark, which together form Scandinavia.[2]\r\n\r\nSAS is an abbreviation of its former full name, Scandinavian Airlines System or legally Scandinavian Airlines System Denmarkâ€“Norwayâ€“Sweden. Part of the SAS Group and headquartered at the SAS FrÃ¶sundavik Office Building in Solna, Sweden, the airline operates 182 aircraft to 90 destinations. The airline\'s main hub is at Copenhagen-Kastrup Airport, with connections to over 50 cities in Europe. Stockholm-Arlanda Airport (with more than 30 European connections) and Oslo Airport, Gardermoen are the other major hubs.[3] Minor hubs also exist at Bergen Airport, Flesland, GÃ¶teborg Landvetter Airport, Stavanger Airport, Sola and Trondheim Airport, VÃ¦rnes. SAS Cargo is an independent, wholly owned subsidiary of Scandinavian Airlines and its main office is at Copenhagen Airport.[4]\r\n\r\nIn 2012, SAS carried 25.9 million passengers, achieving revenues of SEK 36 billion.[5] This makes it the eighth-largest airline in Europe. The SAS fleet consists of Airbus A319, A320, A321, A330 and A340, and Boeing 737 Next Generation aircraft. In addition, SAS also wetleases ATR 72, Saab 2000 and Bombardier CRJ900 aircraft.[6]\r\n\r\nThe airline was founded in 1946 as a consortium to pool the transatlantic operations of Svensk Interkontinental Lufttrafik, Det Norske Luftfartselskap and Det Danske Luftfartselskab. The consortium was extended to cover European and domestic cooperation two years later. In 1951, all the airlines were merged to create SAS.\r\n\r\nSAS is also one of the founding members of the world\'s largest alliance, Star Alliance.', 'logo1515252358.jpg', 'img1515252358.jpg'),
(5, 'China Airline', 'China Airlines (CAL) (Chinese: ä¸­è¯èˆªç©º; pinyin: ZhÅnghuÃ¡ HÃ¡ngkÅng) (TWSE: 2610) is the flag carrier and largest airline of the Republic of China (Taiwan). It is headquartered in Taoyuan International Airport and has 12,607 regular employees.[4] China Airlines operates over 1,400 flights weekly to 118 airports in 115 cities (including codeshare) across Asia, Europe, North America and Oceania.[5] The cargo division operates 91 pure freighter flights weekly.[6] The carrier was, in 2013, the 29th and 10th largest airline in the world in terms of passenger revenue per kilometer (RPK) and freight RPK, respectively.[2] China Airlines has three airline subsidiaries: Mandarin Airlines operates flights to domestic and low-demand regional destinations; China Airlines Cargo, a member of Skyteam Cargo, operates a fleet of freighter aircraft and manages its parent airline\'s cargo-hold capacity; Tigerair Taiwan is a low-cost carrier established by China Airlines and Singaporean airline group Tigerair Holdings and is wholly owned by China Airlines Group.[7]', 'logo1515252484.jpg', 'img1515252484.jpg'),
(6, 'Saudi Arabian Airline', 'Saudia (Arabic: Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ©â€Ž as-SuÊ¿Å«diyyah), also known as Saudi Arabian Airlines (Ø§Ù„Ø®Ø·ÙˆØ· Ø§Ù„Ø¬ÙˆÙŠØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ©), is the national carrier[2] airline of Saudi Arabia, based in Jeddah.[3] The airline\'s main operational base is at King Abdulaziz International Airport in Jeddah. King Khalid International Airport in Riyadh and King Fahd International Airport in Dammam are secondary hubs. The new Dammam airport was opened for commercial use on 28 November 1999. Dhahran International Airport in use until then, has reverted to being used as a military base. The airline is the third largest in the Middle East in terms of revenue, behind Emirates and Qatar Airways.[4] It operates domestic and international scheduled flights to over 85 destinations in the Middle East, Africa, Asia, Europe and North America. Domestic and international charter flights are operated, mostly during the Ramadan and the Hajj season. Saudia is a member of the Arab Air Carriers Organization and joined the SkyTeam airline alliance on 29 May 2012.', 'logo1515252969.jpg', 'img1515252969.jpg'),
(7, 'Ethiopian Airline', 'Ethiopian Airlines (Amharic: á‹¨áŠ¢á‰µá‹®áŒµá‹« áŠ á‹¨áˆ­ áˆ˜áŠ•áŒˆá‹µ (YÃ¤itÉ™yopÌ£É™ya Ã¤yÃ¤rÉ™ mÃ¤nÉ™gÃ¤dÉ™); á‹¨áŠ¢á‰µá‹®áŒµá‹« (YÃ¤itÉ™yopÌ£É™ya) in short), formerly Ethiopian Air Lines (EAL) and often referred to as simply Ethiopian, is Ethiopia\'s flag carrier[6] and is wholly owned by the country\'s government. EAL was founded on 21 December 1945 and commenced operations on 8 April 1946, expanding to international flights in 1951. The firm became a share company in 1965, and changed its name from Ethiopian Air Lines to Ethiopian Airlines. The airline has been a member of the International Air Transport Association since 1959, and of the African Airlines Association (AFRAA) since 1968.[7] Ethiopian is a Star Alliance member, having joined in December 2011.\r\n\r\nIts hub[8] and headquarters are at Bole International Airport in Addis Ababa, from where it serves a network of 122 passenger destinations â€”20 of them domesticâ€” and 44 freighter destinations.[9] Ethiopian flies to more destinations in Africa than any other carrier. It is one of the fastest-growing companies in the industry[10][11] and is the largest on the African continent', 'logo1515253104.jpg', 'img1515253104.jpg'),
(8, 'Jambo Jet', 'Jambojet Limited is a Kenyan low-cost airline that started operations in 2014. It is a subsidiary of Kenya Airways and is headquartered in Nairobi, Kenya.', 'logo1515253668.jpg', 'img1515253668.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(20) NOT NULL,
  `hotel_id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `air_conditioner` int(10) NOT NULL,
  `entertainment` int(10) NOT NULL,
  `swimming_pool` int(10) NOT NULL,
  `tv` int(10) NOT NULL,
  `conference_room` int(10) NOT NULL,
  `wifi` int(10) NOT NULL,
  `room_service` int(10) NOT NULL,
  `wine_bar` int(10) NOT NULL,
  `fitness_facility` int(10) NOT NULL,
  `doorman` int(10) NOT NULL,
  `restaurant` int(10) NOT NULL,
  `complimentary_breakfast` int(10) NOT NULL,
  `pets_allowed` int(10) NOT NULL,
  `smoking_allowed` int(10) NOT NULL,
  `fire_place` int(10) NOT NULL,
  `fridge` int(10) NOT NULL,
  `hot_tub` int(10) NOT NULL,
  `free_parking` int(10) NOT NULL,
  `play_place` int(10) NOT NULL,
  `elevator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_id`, `name`, `location`, `description`, `price`, `country`, `city`, `longitude`, `latitude`, `air_conditioner`, `entertainment`, `swimming_pool`, `tv`, `conference_room`, `wifi`, `room_service`, `wine_bar`, `fitness_facility`, `doorman`, `restaurant`, `complimentary_breakfast`, `pets_allowed`, `smoking_allowed`, `fire_place`, `fridge`, `hot_tub`, `free_parking`, `play_place`, `elevator`) VALUES
(1, 'hotel_1515311747', 'Villa rosa kempinski', 'Nairobi Westlands', 'Offering the perfect fusion of European luxury and Kenyan hospitality, Villa Rosa Kempinski is positioned between the city and countryside. The hotel is a unique destination where guests can spend time relaxing or working, and in addition to the 200 rooms and suites distributed throughout its ten floors, you will also find exquisite dining opportunities here.\r\n\r\nIn addition to our all-day dining restaurant, Cafe Villa Rosa, you can try a range of menus and dining styles across K Lounge; Balcony Bar; Pan-Asian 88 Lounge and Restaurant; Italian Restaurant LUCCA; and our Levant -style lounge and restaurant Tambourin', '250', 'Kenya', 'Nairobi', '36.809015', '-1.271252', 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1),
(3, 'hotel_1515313099', 'Hilton hotel', 'Mama Ngina St, Nairobi', 'Set in the Central Business District, this understated, non-smoking hotel is an 8-minute walk from the Kenyatta International Convention Centre and Jamia Mosque. \r\n\r\nSubdued, soundproof rooms offer free Wi-Fi, flat-screens and minifridges, plus safes and tea and coffeemaking facilities; some add pool or city views. Upgraded rooms add executive lounge access, and suites have living rooms and dining areas. Room service is available 24/7.\r\n\r\nBreakfast and parking are complimentary. There are 5 restaurants, including a retro cafe, and a BBQ grill beside a rooftop pool. There\'s also a gym and a spa, plus 12 banquet rooms and a ballroom. Pets are welcome.', '200', 'Kenya', 'Nairobi', '36.8245512', '-1.2852737', 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0),
(4, 'hotel_1515313370', 'The Nairobi Safari Club', 'University Way, Nairobi City', 'This upmarket all-suite hotel is 2 km from National Museums of Kenya and Kenyatta International Convention Centre, as well as 6 km from Wilson Airport. \r\n\r\nFeaturing classic furnishings, the straightforward suites come with free Wi-Fi, tea and coffeemaking facilities, safes, minibars and flat-screens. Upgraded suites have separate bedrooms, living rooms and dining areas. Thereâ€™s 24-hour room service.\r\n\r\nFree amenities include parking, and breakfast, served in a low-key restaurant. Other dining options include a pizzeria, a low-key bar and a cafe with optional outdoor seating. A fitness centre, massage services and airport transfers are available', '200', 'Kenya', 'Nairobi', '36.8174511', '-1.2807666', 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 1, 1, 0, 0),
(5, 'hotel_1515411511', 'Fairmont The Norfolk Hotel', 'Harry Thuku Rd, Nairobi', 'Built in 1904, this sophisticated hotel is a 10-minute walk from the National Museums of Kenya, 2 km from Kenyatta International Convention Centre and 3 km from Nairobi Arboretum. \r\n\r\nThe elegant rooms and suites come with flat-screen TVs, Wi-Fi, and tea and coffeemakers, along with safes. Some feature verandas. Suites add living rooms, and some have private terraces.\r\n\r\nThere\'s a gourmet restaurant, a casual eatery with a terrace, and a high-end wine bar. A sophisticated lounge offers high tea. Other amenities include a heated outdoor pool, a fitness center, and a sauna and steam room. Meeting and event space is available, including a ballroom.', '100', 'Kenya', 'Nairobi', '36.8165313', '-1.2780695', 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(6, 'hotel_1515412261', 'PrideInn Hotel Westlands', 'Westlands Rd, Nairobi', 'In a bustling commercial area with casual eateries, this relaxed hotel is 6 km from the waterfalls and walking trails of Karura Forest, 16 km from Nairobi National Park and 20 km from Jomo Kenyatta International Airport.\r\n\r\nStraightforward rooms with colourful accents come with free Wi-Fi, satellite TV and safes, plus tea and coffeemaking facilities. Room service is available 24/7.\r\n\r\nCooked breakfast is complimentary. Additional amenities include a bar, a juice bar and an international restaurant.', '100', 'Kenya', 'Nairobi', '36.8058743', '-1.2666118', 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE `hotel_images` (
  `id` int(20) NOT NULL,
  `hotel_id` varchar(20) NOT NULL,
  `img1` varchar(20) NOT NULL,
  `img2` varchar(20) NOT NULL,
  `img3` varchar(20) NOT NULL,
  `img4` varchar(20) NOT NULL,
  `img5` varchar(20) NOT NULL,
  `img6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_images`
--

INSERT INTO `hotel_images` (`id`, `hotel_id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(1, 'hotel_1515311747', 'img11515311747.jpg', 'img21515311747.jpg', 'img31515311747.jpg', 'img41515311747.jpg', 'img51515311747.png', 'img61515311747.jpg'),
(3, 'hotel_1515313099', 'img11515313099.jpg', 'img21515313099.jpg', 'img31515313099.jpg', 'img41515313099.jpg', 'img51515313099.jpg', 'img61515313099.jpg'),
(4, 'hotel_1515313370', 'img11515313370.jpg', 'img21515313370.jpg', 'img31515313370.jpg', 'img41515313370.jpg', 'img51515313370.jpg', 'img61515313370.jpg'),
(5, 'hotel_1515411511', 'img11515411511.jpg', 'img21515411511.jpg', 'img31515411511.jpg', 'img41515411511.jpg', 'img51515411511.jpg', 'img61515411511.jpg'),
(6, 'hotel_1515412261', 'img11515412261.jpg', 'img21515412261.jpg', 'img31515412261.jpg', 'img41515412261.jpg', 'img51515412261.jpg', 'img61515412261.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `img_base_name` varchar(50) NOT NULL,
  `img_ext` varchar(50) NOT NULL,
  `img_height` int(11) NOT NULL,
  `img_width` int(11) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `img_status` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`) VALUES
(1, 'David Copperfield'),
(2, 'Ricky Ponting'),
(3, 'Cristiano Ronaldo'),
(4, 'Lionel Messi'),
(5, 'Shane Watson');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(19, 'atienodiana10@gmail.com'),
(8, 'augustineowuor32@gmail.com'),
(5, 'jdsjjskskjksd'),
(17, 'trizzletimberlake@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `phone`, `password`, `gender`, `locale`, `picture`, `city`, `country`, `about`, `link`, `created`, `modified`) VALUES
(1, 'google', '108594477655234530096', 'Augustine', 'treezy', 'augustinetreezy@gmail.com', '', '', '', 'en', 'https://lh5.googleusercontent.com/-dPhrClIylkQ/AAAAAAAAAAI/AAAAAAAAAjU/cDZ4zDYgHmg/photo.jpg', '', '', '', 'https://plus.google.com/108594477655234530096', '2017-12-27 07:57:32', '2018-01-12 16:09:48'),
(6, '', '', 'Nebster', 'Malash', 'trizzletimberlake@gmail.com', '+25470503043', '669bd0746acf74811d192f266d4dbc97', '', '', 'images/user_dp/user_6.png', 'Nairobi', 'Kenya', 'Simply a boy', '', '2017-12-30 12:19:38', '2017-12-30 12:19:38'),
(7, '', '', 'Oliver', 'Watiti', 'olivertweesty32@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '2017-12-30 12:28:43', '2017-12-30 12:28:43'),
(8, '', '', 'Augustine', 'Owuor', 'augustineowuor32@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '2017-12-30 12:47:56', '2017-12-30 12:47:56'),
(9, 'custom', '', 'Diana', 'Atieno', 'atienodiana10@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '2017-12-30 01:21:08', '2017-12-30 01:21:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_desc`
--
ALTER TABLE `flight_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `flight_desc`
--
ALTER TABLE `flight_desc`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hotel_images`
--
ALTER TABLE `hotel_images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
