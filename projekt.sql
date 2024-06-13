-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 07:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `projekt`
--

CREATE TABLE `projekt` (
  `id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `title` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `about` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `content` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `pphoto` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `category` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `autor` varchar(64) NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projekt`
--

INSERT INTO `projekt` (`id`, `datum`, `title`, `about`, `content`, `pphoto`, `category`, `autor`, `archive`) VALUES
(1, '2024-06-10', 'These elections could mean a turnaround for Ukraine', 'The MAIN consequence of the EU elections is the defeat of Macron', 'ALTHOUGH it is clear that Europe is entering a period of turbulent political life, that at least two national governments "fell" after the EU parliamentary elections (in France and Belgium), and that Europe has colloquially "shifted to the right", it is also a fact that the balance of power in the EU parliament has not drastically changed.\r\n\r\nThe majority of the 720 seats will still be held by the majority parties that were previously the majority in the EP. The European People's Party (which includes the German CDU and HDZ) will occupy 185 seats in parliament. The president of the European Commission, Ursula von der Leyen, also comes from this party.\r\n\r\nThe Alliance of Socialists and Democrats (which includes the SDP) is expected to have 137 seats, while the Liberals should have 79 seats. Additionally, the Greens (which includes Možemo) will have 52 seats. Although the results are temporary, they are unlikely to change significantly.\r\n\r\nAs we have written today, sovereignist and populist parties have experienced a rise. The European Conservatives and Identity and Democracy will have 71 and 58 seats respectively. This also includes the AfD and the Hungarian Prime Minister Orban's Fidesz party, which do not belong to any of these European party families, having won 14 and 11 seats respectively.\r\n\r\nAll mentioned options of various right-wing, populist, and sovereignist parties might have a third of the parliament, allowing them to obstruct the adoption of laws in the European Parliament.', '366042cb-f8a9-4f7b-a463-6d38048bf76a.jpg', 'NEWS', 'Ivan Čović', 0),
(2, '2024-06-11', 'Construction of another roundabout in Zagreb begins, major road closes', 'WORKS will last until June 18 at 8 PM.', 'TODAY at nine o'clock, Sajmišna Street at the intersection with Karla Metikoša Street will be closed to all traffic. The construction of a roundabout begins at that location. The works will last until June 18 at 8 PM.\r\n\r\n"Due to the construction of the roundabout, Sajmišna Street at the intersection with Karla Metikoša Street will be closed to all traffic from Tuesday, June 11, at 9:00 AM until Tuesday, June 18, at 8:00 PM," the City of Zagreb announced.\r\n\r\nThe detour route will be:\r\n\r\nSajmišna Street ? Tišinska ? Gata ? Kamenarka ? Sarajevska Street and vice versa\r\n\r\nSarajevska Street ? Jakuševečka ? Zagrebačka ? Sajmišna Street and vice versa\r\n\r\n"During the mentioned works, traffic will follow the temporarily set regulations.\r\n\r\nWe warn citizens of possible traffic difficulties and ask for their understanding," announced the City of Zagreb.', '93a0e1d3-82a9-4586-8371-64ffd4a46dbf.jpg', 'NEWS', 'Drago Čosić', 0),
(3, '2024-06-11', 'Croatian goalkeeper left Euro preparations and completed career transfer', 'He missed the national team training to sign the contract', 'NEDILJKO LABROVIĆ (24) is the new player of the German Bundesliga team Augsburg, with whom he signed a five-year contract. "We are delighted to announce the signing of a five-year contract with Nediljko Labrović until 2029. The Croatian international, born in Split, will join us from his current club HNK Rijeka. We are excited to have you!", the German club announced on social media.\r\n\r\nThe exact amount of the transfer was not disclosed, but according to sources close to Rijeka, it is around three million euros. Labrović will become the fourth highest-paid goalkeeper transferred from the SuperSport HNL. Dominik Livaković tops the list, having left Dinamo for Fenerbahçe for 6.65 million euros last summer. Ivo Grbić is second, with Atletico Madrid paying 3.5 million euros in 2020, and Lovre Kalinić is third, leaving Hajduk for Gent in 2016 for 3.1 million euros.', '96f8aa39-6b7f-42cf-9113-b2a2d215b8d8.jpg', 'SPORTS', 'Ivan Čović', 0),
(4, '2024-06-11', 'Guardian: Modrić is a leader, but some players cannot play because of him', 'THE ENGLISH newspaper provides reviews of all participating teams in the European Championship.', 'ON SATURDAY, Croatia opens the Euro with a match against Spain. Zlatko Dalić's team is in their German camp in Neuruppin, and after Spain, they face clashes with Albania and Italy. Ahead of the start of the Euro, the English Guardian provides an overview of all participating teams. They highlight Croatia's captain Luka Modrić (38) as the leader and main strength but emphasize that building the team around him means other players have to adapt and some cannot play in their strongest roles. Joško Gvardiol cannot have a full-back role identical to the one at City, and Andrej Kramarić and Burno Petković do not drop as low as they are used to at Hoffenheim and Dinamo.\r\n\r\nModrić will thus once again lead Croatia in a tournament that the Guardian believes will be his "swan song". Among young players, they highlight Martin Baturina and Luka Sučić, who is marked as a potential Modrić's successor in the future, with the RB Salzburg midfielder described as someone who plays more vertically than the Real Madrid number ten.', 'dba649e6-cc66-4b35-b59e-6761a63e8820.jpg', 'SPORTS', 'Ivan Čović', 0),
(5, '2024-06-12', 'Hezbollah commander killed by Israel, they launch retaliatory attack', 'IN AN ISRAELI attack on the village of Jouya in southern Lebanon tonight, at least four people were killed, including a senior field commander in the Lebanese ', 'IN AN ISRAELI attack on the village of Jouya in southern Lebanon tonight, at least four people were killed, including a senior field commander in the Lebanese armed group Hezbollah, Reuters reported.\r\n\r\nSources identified him as the commander of the group for the central region of the southern border belt, which includes some of the cities most affected in the past eight months of fire exchanges between Israel and Hezbollah.\r\n\r\nThere were no immediate comments from the Israeli military.\r\n\r\nSources, speaking on condition of anonymity, said the commander's role in Hezbollah was as significant as that of Wissam Tawil, a senior Hezbollah commander killed in an Israeli attack in January.\r\n\r\nHezbollah launched a retaliatory attack tonight. \r\n\r\nThe Israel Defense Forces (IDF) released footage. "This is not a fireworks display in celebration of the Shavout holiday. These are our air defense systems defending our civilians from Hezbollah rocket barrages in northern Israel," they wrote. \r\n\r\nAbout 300 Hezbollah fighters, including commanders and operatives with key responsibilities, have been killed in Israeli attacks on Lebanon since October, when the war in Gaza broke out.', 'e23d44bd-7b5a-4bdb-b162-5fe5661ee14d.jpg', 'NEWS', 'Vito Arčić', 0),
(6, '2024-06-12', 'Jeličić predicted group winners at the Euro. He had only one surprise', 'HRT'S expert commentator predicted the group stage of the European Championship', 'THERE are only three days left until the first match of the Croatian national football team at the European Championship in Germany. On Saturday at 6 PM, they play against Spain in Berlin, four days later they face Albania in Hamburg, and the group stage will end on June 24 in Leipzig against Italy.\r\n\r\nThe matches will be broadcast on HRT, and former national team player Joško Jeličić is a regular part of the team. HRT released a video of Jeličić predicting the group winners. In each group, he chose the favorite, except in the group where Croatia plays. According to him, they will win the group ahead of the favored Spain and Italy.\r\n\r\nGroup winners according to Jeličić: Germany, Croatia, England, France, Belgium, Portugal', 'ddabe813-e8b7-4988-9256-8f3a8e3bbff8.jpg', 'SPORTS', 'Gojko Šumar', 0),
(10, '2024-06-06', 'Dutch journalist killed in broad daylight in 2021. His killers are now convicted', 'DE VRIES was shot on a busy street in front of a TV studio in central Amsterdam.', 'A DUTCH court today sentenced three men to nearly 30 years in prison for the murder of renowned investigative journalist Peter R. de Vries, whose daylight killing in Amsterdam shocked the journalistic community across the world.\r\n\r\nPeter R. de Vries was a public figure known for his work in crime journalism. He was shot on July 6, 2021, in central Amsterdam as he was leaving a TV studio, where he had been a guest on a talk show. De Vries died nine days later.\r\n\r\nThe shooter, a 23-year-old Dutchman, was sentenced to 30 years in prison, while his getaway driver, a Polish citizen, also received a 30-year sentence. The court found that a 37-year-old Polish citizen ordered the murder, and he was sentenced to life in prison.\r\n\r\nThe murder of Peter R. de Vries sent shockwaves through the Netherlands and the international journalism community. De Vries was widely admired for his fearless reporting on organized crime, and his death was seen as an attack on the freedom of the press.', '03fbcf5a-1488-4dd6-bef7-1c100b8af256.jpg', 'NEWS', 'Vito Arčić', 0),
(11, '2024-06-06', 'Apple to allow sideloading of apps with iOS 17, under EU pressure', 'USERS will be able to install applications without using the official App Store', 'APPLE is preparing to allow users to install applications on iPhones without using the official App Store for the first time, according to Bloomberg. The company will enable the so-called sideloading feature with the next major iOS update, expected to be called iOS 17.\r\n\r\nThis change comes as a result of pressure from the European Union, which has been pushing for greater competition and consumer rights in digital markets. The new regulations will require Apple to permit third-party app stores on its platform.\r\n\r\nThe sideloading feature will allow users to download and install applications directly from websites or other sources, bypassing the App Store and potentially avoiding Apple's 30% commission on app sales and in-app purchases.\r\n\r\nAlthough this new feature will give users more freedom, it also raises security concerns, as apps downloaded from outside the App Store may not be subjected to the same security checks and guidelines as those available in the official store.', '2441677b-63f8-4185-a0ad-e76a9fdbd9a7.jpg', 'TECH', 'Gojko Šumar', 0),
(12, '2024-06-06', 'Zlatko Dalić announced the list of players for the European Championship', 'THE COACH revealed the 26 names for the tournament.', 'THE COACH of the Croatian national football team, Zlatko Dalić, has announced the list of 26 players who will travel to Germany for the upcoming European Championship.\r\n\r\nThe list includes a mix of experienced veterans and promising young talents. Captain Luka Modrić will lead the team, which also features stars like Ivan Perišić, Marcelo Brozović, and Andrej Kramarić. Young players like Joško Gvardiol and Luka Sučić are also included, highlighting the blend of experience and youth in the squad.\r\n\r\n"We have a strong team with a good mix of experienced players and young talents. I believe in this squad, and I am confident that we can achieve great results at the Euro," Dalić said during the announcement.\r\n\r\nThe Croatian team will face Spain, Albania, and Italy in the group stage. Their first match is scheduled for June 15 against Spain in Berlin.', 'b1d55f64-8726-4933-9ec2-6f1a8e4b494d.jpg', 'SPORTS', 'Gojko Šumar', 0),
(13, '2024-06-08', 'The UN warns of the consequences of the increasing number of refugees', 'THE SITUATION is getting worse every day', 'THE UNITED Nations has issued a warning about the growing number of refugees worldwide, stating that the situation is deteriorating day by day.\r\n\r\nIn its latest report, the UN High Commissioner for Refugees (UNHCR) stated that the number of forcibly displaced people has reached a record high, with more than 82 million people displaced by conflict, violence, and persecution as of the end of last year. This number includes 26.4 million refugees, 48 million internally displaced people, and 4.1 million asylum seekers.\r\n\r\nThe UNHCR report highlighted several key factors contributing to the increase in displacement, including ongoing conflicts in countries like Syria, Afghanistan, and South Sudan, as well as emerging crises in places like Ethiopia's Tigray region and Myanmar.\r\n\r\nThe report also emphasized the impact of the COVID-19 pandemic on displaced populations, exacerbating existing vulnerabilities and creating new challenges for refugees and host communities alike.\r\n\r\nThe UN has called for increased international cooperation and support to address the root causes of displacement and to provide adequate assistance and protection for those affected.', 'e99b9b1c-4e94-4ac3-913f-5c486f8ac3d1.jpg', 'NEWS', 'Drago Čosić', 0);


--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `razine` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razine`) VALUES
(7, 'Branimir', 'Lovrenović', 'Hiltop', '12345', 1),
(8, 'Biljana', 'Lovrenović', 'Unicorn', '123456', 0),
(9, 'Antonela', 'Lovrenović', 'Sivi', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projekt`
--
ALTER TABLE `projekt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projekt`
--
ALTER TABLE `projekt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
