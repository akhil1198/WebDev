CREATE DATABASE  IF NOT EXISTS `koniandko` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_bin */;
USE `koniandko`;
-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: koniandko
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE latin1_bin NOT NULL,
  `user_id` varchar(45) COLLATE latin1_bin NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `body` text COLLATE latin1_bin NOT NULL,
  `category` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_bin COMMENT='This table will contain all the blogs in the system. This will not contain any images related to the blog.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_post`
--

LOCK TABLES `blog_post` WRITE;
/*!40000 ALTER TABLE `blog_post` DISABLE KEYS */;
INSERT INTO `blog_post` VALUES (28,'The Indian Elephant','koni','2019-11-15 17:55:25','<p>The Indian Elephant is one of the three extant recognised subspecies of the Asian elephant and native of mainland Asia. </p>\r\n<p>Since 1986, the Asian Elephant has been listed as Endangered on the IUCN Red List as the wild population has declined by the least 50% since the 1930s to 1940s. The Asian Elephant is threatened by habitat loss, degradation and fragmentaiton.</p>\r\n<p>In general, Asian elephants are smaller than African elephants and have the highest body point of the head. Their back is convex or level. Indian elephants have a shoulder hieght of between 2 and 3.5m, weigh between 2000 and 5000 kg.</p>\r\n<p>The largest Indian elephant was 3.43m high at the shoulder. In 1985, two large elephant bulls were spotted for the first time in Bardia National Park, and named Raja Gaj and Kancha. They roamed the park area together and occasionally visited female herds.</p>\r\n<p> Indian elephants have smaller ears, but relatively broader skulls and larger trunks than African Elephants. Toes are large and broad. Unlike the African cousins, their abdomen is proportionate with their body weight but the African elephant has a large abdomen as compared to the skulls.</p>',1,0),(29,'Western Ghats of Karnataka','koni','2019-11-15 18:11:16','<p>The Western Ghats are a mountain range that covers an area of 140000 square kilometers in a strecthc of 1600 kilometers parallel to the western coast of the Indian peninsula. </p><p>Older than the Himalaya mountains, the mountain chain of the Western Ghats represents geomorphic features of immense importance with unique biophysical and ecological processes. The high montane forest ecosystems influence the Indian monsoon weather pattern. Moderating the tropical climate of the region, the site presents one of the best examples of the monsoon system on the planet. It also has an exceptionally high level of biological diversity and endemism and is recognized as one of the worlds eight hottest hotspots of biological diversity. </p><p>The forests of the site include some of the best representatives of non-equatorial tropical evergreen forests anywhere and are home to at least 325 globally threatened flora, fauna, bird, amphibian, reptile and fish species. </p>\r\n<p>A significant characteristic of the Western Ghats is the exceptionally high level of biological diversity and endemism.The globally threatened flora and fauna in the Western Ghats are represented by 229 plant species, 31 mammal species, 15 bird species, 43 amphibian species, 5 reptile species and 1 fish species. Of the total 325 globally threatened species in the Western Ghats, 129 are classified as Vulnerable, 145 as Endangered and 51 as Critically Endangered.</p><p>The 39 component parts of this serial property fall under a number of protection regimes, ranging from Tiger Reserves, National Parks, Wildlife Sanctuaries, and Reserved Forests. All components are owned by the State and are subject to stringent protection under laws including the Wildlife (Protection) Act of 1972, the Indian Forest Act of 1927, and the Forest Conservation Act (1980). Through these laws the components are under the control of the Forestry Department and the Chief Wildlife Warden, providing legal protection. 40% of the property lies outside of the formal protected area system, mostly in Reserved Forests, which are legally protected and effectively managed. The Forest Conservation Act (1980) provides the regulatory framework to protect them from infrastructure development.\r\n</p><p>Integrating the management of 39 components across 4 States is a challenge, for which a 3-tier governance mechanism is required that will operate at the Central, State and Site levels to provide effective coordination and oversight to the 39 components. A Western Ghats Natural Heritage Management Committee (WGNHMC) under the auspices of the Ministry of Environment of Forests (MoEF), Government of India to deal with coordination and integration issues is already functional. All 39 components in the 7 sub-clusters are managed under specific management / working plans duly approved by the State/Central governments. The livelihood concerns of the local communities are regulated by the Forest Rights Acts, 2006 and their participation in governance is ensured through Village Ecodevelopment Committees (VECs).</P>',2,0),(30,'Jim Corbett National Park','koni','2019-11-15 18:17:53','<p>Jim Corbett National Park is the oldest national park in India and was established in 1936 as Hailey National Park to protect the endangered Bengal Tiger.</p><p>It is located in Nainital district and Pauri Garwhal district of Uttarkhand and was named after Jim Corebett, a well known hunter and naturalist. The park was the first to come under the Project Tiger initiative.</p><p>It covers an area of about 520 square kilometers, comprising of hills, marshy land, large lake, riverine belts and grasslands. Corbett National Park allows overnight stays to its visitors. To move around within the National Park for watching nature and wildlife, take on a Jeep Safari or an elephant Safari. In Dikhala (situated at the border of Patli Dun valley, in Corbett having abundance of wildlife) you will find varied species of Birds & animals and more than 50 species of raptors (birds of prey like hawks, eagles, kites, vultures etc.). As a result, it is considered as the healthy biodiversity of the area.</p><p><h4> Flora of Corbett National Park</h4></p><p>In Dikhala (situated at the border of Patli Dun valley, in Corbett having abundance of wildlife) you will find varied species of Birds & animals and more than 50 species of raptors (birds of prey like hawks, eagles, kites, vultures etc.). As a result, it is considered as the healthy biodiversity of the area. Sal, Khair, Sissoo and the only conifer called Chir Pine are found in Corbett. Male Bamboo (Dendrocalamus strictus) can be seen in abundance. Flowering plants like Kachnar (Bauhinia Variegata), Semal (Bombax ceiba), Dhak, Madaar or Indian Coral (Erythrinia indica) and Amaltas (Cassia fistula) along with artificially planted trees likeTeak (Tectona grandis), Silver Oak (Gravillea robusta), Eucalyptus, Jacaranda (Jacaranda mimosaefolia) and Bottlebrush (Callistemon viminalis), and can be seen in and around the forest area of Corbett Tiger Reserve. Shrubs like Ber (Zizyphus), Maror Phali (Helicteres isora) and Jhau are also found in Corbett.</p><p><h4> Fauna of Corbett National Park</h4></p><p>The Fauna of Corbett National Park includes a huge list of animals besides Royal Bengal Tigers and Asiatic elephant, which are Asiatic Black Bear, Sloth Bear, Walking Deer, Hog Deer, Sambar, Yellow-throated Marten, Otters and Ghariyal along with aqua fauna such as Golden Oriole, Pallas Fish Eagle, Indian Pitta, Tawny Fish Owl, Scarlet Minivet and species of birds like the Great Pied or hornbill, Orange Breasted Green Pigeon, Hodgsons Bushchat, White-Backed Vulture, and reptile like Ghariyal or Aligator, Mugger or Crocodiles and the King Cobra.</p>',3,0),(31,'African Rhinos','koni','2019-11-16 01:40:21','<p>The two African rhino species â€“ black rhino and white rhino â€“ have both increased in number in recent years thanks to successful conservation efforts, especially in South Africa. Indeed, the white rhino has been brought back from the brink of extinction.</p><p>However, both species are again at risk due to a huge surge in poaching to meet demand for illegal rhino horn, primarily in Asia. Countries and conservationists are stepping up their efforts but record numbers of rhinos are currently being killed.</p><p><h4> Why Rhinos Matter </h4></p><p>Rhinos have been around for millions of years and play a crucial role in their ecosystem. They are important grazers, consuming large amounts of vegetation, which helps shape the African landscape. This benefits other animals and keeps a healthy balance within the ecosystem.</p><p>Local people also depend on the natural resources within rhino habitat for food, fuel and income. As one of Africas big five, rhinos are a popular sight for tourists. Ecotourism can be an important source of income for local people.</p><p>By helping protect rhinos, we are helping to conserve their habitat for the benefit of people and wildlife, helping support local communities and making sure natural resources are available for generations to come.</p><p><h4>Poaching</h4></p><p>The greatest threat facing African rhinos is poaching for the illegal trade in their horns, which has soared in recent years.</p><p>The number of rhinos poached in South Africa alone has increased by 9,000% since 2007 - from 13 to a record 1,215 in 2014.</p><p>Powdered horn is used in traditional Asian medicine as a supposed cure for a range of illnesses â€“ from hangovers to fevers and even cancer.</p><p>But the current surge has been primarily driven by demand for horn in Vietnam. As well as its use in medicine, rhino horn is bought and consumed purely as a symbol of wealth.</p><p>Poaching gangs use increasingly sophisticated methods, including helicopters and night vision equipment to track rhinos, and veterinary drugs to knock them out.</p>\r\n<p>This means countries and conservationists need to match this level of technology to be able to tackle the problem, alongside working to reduce demand.</p>',1,0);
/*!40000 ALTER TABLE `blog_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `blog_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_user_idx` (`user_id`),
  KEY `comments_blog_id_blog_post_idx` (`blog_id`),
  CONSTRAINT `comments_blog_id_blog_post` FOREIGN KEY (`blog_id`) REFERENCES `blog_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comments_user_id_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (6,1,'cools','2019-11-18 19:04:02',29),(7,3,'hi','2019-11-18 19:04:20',28),(8,1,'wow','2019-11-29 11:03:25',28);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE latin1_bin NOT NULL,
  `alt` varchar(45) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `images_blog_id_idx` (`blog_id`),
  CONSTRAINT `images_blog_id` FOREIGN KEY (`blog_id`) REFERENCES `blog_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (18,28,'../assets/images/blogs/elephant_1.jpg','elephant_1.jpg'),(19,28,'../assets/images/blogs/elephant_2.jpg','elephant_2.jpg'),(20,28,'../assets/images/blogs/elephant_3.jpg','elephant_3.jpg'),(21,29,'../assets/images/blogs/wester_ghats_1.jpg','wester_ghats_1.jpg'),(22,29,'../assets/images/blogs/western_ghats_2.jpg','western_ghats_2.jpg'),(23,29,'../assets/images/blogs/western_ghats_3.jpg','western_ghats_3.jpg'),(24,30,'../assets/images/blogs/jc_1.jpg','jc_1.jpg'),(25,30,'../assets/images/blogs/jc_2.jpg','jc_2.jpg'),(26,30,'../assets/images/blogs/jc_3.jpg','jc_3.jpg'),(27,30,'../assets/images/blogs/jc_4.jpg','jc_4.jpg'),(28,30,'../assets/images/blogs/jc_5.jpg','jc_5.jpg'),(29,30,'../assets/images/blogs/jc_6.jpg','jc_6.jpg'),(30,31,'../assets/images/blogs/ar_1.jpg','ar_1.jpg'),(31,31,'../assets/images/blogs/ar_2.jpg','ar_2.jpg'),(32,31,'../assets/images/blogs/ar_3.jpg','ar_3.jpg'),(33,31,'../assets/images/blogs/ar_4.jpg','ar_4.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liked_posts`
--

DROP TABLE IF EXISTS `liked_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `liked_posts` (
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  UNIQUE KEY `blog_id_UNIQUE` (`blog_id`),
  KEY `liked_posts_user_id_blog_post_idx` (`user_id`),
  CONSTRAINT `liked_posts_blog_id_blog_posts` FOREIGN KEY (`blog_id`) REFERENCES `blog_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `liked_posts_user_id_blog_post` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liked_posts`
--

LOCK TABLES `liked_posts` WRITE;
/*!40000 ALTER TABLE `liked_posts` DISABLE KEYS */;
INSERT INTO `liked_posts` VALUES (1,2),(3,30);
/*!40000 ALTER TABLE `liked_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `read_later`
--

DROP TABLE IF EXISTS `read_later`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `read_later` (
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  UNIQUE KEY `blog_id_UNIQUE` (`blog_id`),
  KEY `read_later_user_id_user_idx` (`user_id`),
  CONSTRAINT `read_later_blog_id_blog_post` FOREIGN KEY (`blog_id`) REFERENCES `blog_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `read_later_user_id_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `read_later`
--

LOCK TABLES `read_later` WRITE;
/*!40000 ALTER TABLE `read_later` DISABLE KEYS */;
INSERT INTO `read_later` VALUES (1,2),(3,30);
/*!40000 ALTER TABLE `read_later` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) COLLATE latin1_bin NOT NULL,
  `full_name` varchar(45) COLLATE latin1_bin NOT NULL,
  `email` varchar(45) COLLATE latin1_bin NOT NULL,
  `password` varchar(45) COLLATE latin1_bin NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_bin COMMENT='This table stores information about all the users, including admins, bloggers and regular users.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'koni','Srigovind','nayaksrigovind@gmail.com','koniandko',1),(2,'prajwal','Prajwal R','prajwal@gmail.com','timing',2),(3,'akhil','S Akhil','akhil@gmail.com','ravi',3),(4,'meghana','Meghana','megahana@gmail.com','varun',2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-02 13:28:34
