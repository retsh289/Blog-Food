-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Mar 22, 2023 at 11:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `intro`, `createdAt`, `updatedAt`) VALUES
(4, 'Stir-frying', 'Stir-frying.jpg', 'Share recipes and techniques for quickly cooking vegetables, meats, and noodles in a wok or skillet.', '2023-02-23 05:20:02', NULL),
(5, 'Steaming', 'Steaming.jpg', 'Feature recipes and tips for steaming vegetables, seafood, and dumplings.', '2023-02-23 05:21:05', '2023-03-16 15:39:02'),
(6, 'Raw food', 'Raw food.jpg', 'Focus on recipes and tips for preparing raw and uncooked foods like salads, sushi, and ceviche.', '2023-02-23 05:22:48', NULL),
(7, 'Roasting', 'Roasting.jpg', 'Share recipes and methods for roasting meats, poultry, vegetables, and more.', '2023-02-23 05:23:30', NULL),
(8, 'Grilling', 'Grilling.jpg', 'Grilling involves cooking food over an open flame, typically on a barbecue grill. It imparts a smoky flavor and a crisp texture to food, making it a popular cooking method for meat, vegetables, and fruits.', '2023-03-01 04:12:50', NULL),
(9, 'Baking', 'Baking.avif', 'Baking involves cooking food in an oven, typically at a high temperature. It is a dry heat cooking method that is used for bread, pastries, and casseroles.', '2023-03-01 04:13:49', NULL),
(10, 'Braising', 'Braising.jpg', 'Braising involves cooking food in a small amount of liquid over low heat for an extended period of time. It is used for tough cuts of meat, such as beef brisket, and can be done in a slow cooker or Dutch oven.', '2023-03-01 04:14:56', NULL),
(11, 'Dessert', 'Dessert.jpg', 'Sweet food eaten at the end of a meal', '2023-03-17 16:09:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `userId`, `postId`, `message`, `createdAt`) VALUES
(1, 1, 6, 'helpful', '2023-03-19 17:13:20'),
(2, 9, 9, 'look yummie !!!', '2023-03-20 03:44:30'),
(3, 1, 3, 'Tks <3', '2023-03-22 02:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `subject`, `createdAt`) VALUES
(1, 'Tom', 'tom@gmail.com', 'Have you always been interested in cooking and food? If so, when did your passion for food begin?\r\nDid you have any other inspirations or motivations to start a blog (such as sharing your recipes with others or building a community)?\r\nWhat were some of the initial challenges you faced when starting your blog?', 'What inspired you to start a food blog?', '2023-02-03 04:23:24'),
(2, 'Lily', 'lily@gmail.com', 'What draws you to this type of cuisine?\r\nAre there any specific dishes within this cuisine that you particularly enjoy cooking?\r\nHave you had the opportunity to travel to regions where this cuisine is popular, and how has that influenced your cooking?', 'What is your favorite type of cuisine to cook?', '2023-02-03 04:23:24'),
(3, 'Tim', 'tim@gmail.com', 'What do you appreciate about this ingredient (such as its versatility, unique flavor, or nutritional benefits)?\r\nAre there any specific dishes or cuisines where you particularly enjoy using this ingredient?\r\nHave you ever experimented with using this ingredient in an unconventional way?', 'What is your favorite ingredient to work with and why?', '2023-03-15 22:27:08'),
(4, 'James', 'james@gmail.com', 'Do you have a specific process for brainstorming and developing new recipes?\r\nAre there any sources of inspiration you regularly turn to for recipe ideas (such as cookbooks or food blogs)?\r\nHave you ever adapted or modified a traditional recipe to suit your own tastes or dietary needs?', 'How do you come up with recipe ideas for your blog?\r\n', '2023-02-03 04:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `love`
--

CREATE TABLE `love` (
  `id` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `love`
--

INSERT INTO `love` (`id`, `postId`, `userId`) VALUES
(1, 9, 1),
(3, 9, 9),
(4, 2, 9),
(5, 7, 1),
(6, 8, 3),
(7, 9, 7),
(8, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `email`, `createdAt`) VALUES
(1, 'Maya', 'maya@gmail.com\r\n', '2023-02-03 04:08:08'),
(2, 'Ethan', 'ethan@gmail.com', '2023-02-03 04:08:08'),
(3, 'Olivia', 'Olivia@gmail.com', '2023-02-03 04:09:23'),
(4, 'Liam', 'liam@gmail.com', '2023-02-03 04:09:23'),
(5, 'Alexander', 'alexander@gmail.com', '2023-03-03 04:10:11'),
(6, 'Isabella', 'isabella@gmail.com', '2023-02-03 04:10:11'),
(7, NULL, 'abc@gmail.com', '2023-03-22 00:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `subscribe` bit(1) NOT NULL DEFAULT b'0',
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `categoryId` tinyint(4) DEFAULT NULL,
  `tagId` tinyint(4) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `description`, `content`, `subscribe`, `createdAt`, `updatedAt`, `categoryId`, `tagId`) VALUES
(1, 'The Ultimate Guide to Seitan', '1678991088.webp', 'Seitan is a super versatile vegan protein made from vital wheat gluten. It’s what’s used to make vegan chicken, aka fake chicken, and doesn’t that lead image look just like chicken? ?', '<h2>What is seitan?</h2><p>Seitan is wheat gluten. Essentially, it’s food made from gluten, the protein found in wheat. The commonly used name, seitan, is Japanese (セイタン) which implies that it was invented in Japan, but wheat gluten first appeared in China in the 6th century.<br>It’s an incredibly popular ingredient in Asian and Southeast Asian countries as a vegan alternative to meat because of its chewiness that’s reminiscent of the texture of meat.</p><p>You can buy it at health food grocery stores or Whole Foods, but even better, it’s really easy to make at home! You can make it one of two ways: either by using whole flour and washing it or by using vital wheat gluten.</p><h2>How to make seitan</h2><ol><li><strong>Make the dough:</strong> Mix together 1 cup vital wheat gluten with 1/4 cup <a href=\"https://amzn.to/30P6kjP\">chickpea flour</a>. Add some seasonings and stir in 1 cup of water or vegetable broth.</li><li><strong>Knead the dough:</strong> Knead the dough for 5-10 minutes so it develops strands of gluten – this is what gives seitan its meaty texture. The more you knead, the more chewy it’ll be. Conversely, the less you knead, the more tender, so adjust according to what you like. I like to use a stand mixer.</li><li><strong>Let it rest:</strong> Let the dough rest, covered for about 5 minutes so the gluten can relax.</li><li><strong>Simmer:</strong> Cut the dough into 4 (or more pieces), shape and simmer on low in a flavorful broth.</li><li><strong>Use it in recipes:</strong> Your seitan is cooked and ready to eat! You can eat it as is, or use it in recipes where you would use meat.</li></ol><h2>Seitan ingredients</h2><p>All you need is vital wheat gluten and water.</p><h2>Where is it from?</h2><p>Seitan was first invented as a meat alternative for Chinese Buddhist monks because one of the key tenets of Buddhism is strict vegetarianism. There’s a huge amount of Chinese vegetarian food that looks just like regular Chinese food but is made with seitan. Nowadays it’s popular all over the world for vegans and vegetarians.</p><h2>How is seitan used?</h2><p>Seitan is used like most meat and meat alternative products. You can use it anywhere meat is used! It can be shredded and crumbled, sliced, and made into sausages or nuggets. Anything meat can do, it can do too.</p>', b'0', '2023-02-17 01:24:48', '2023-03-22 01:52:24', NULL, 4),
(2, 'General Tso’s Chicken', '1679001959.webp', 'Make General Tso\'s chicken at home! It\'s better than takeout: crispy, tangy, sweet, and absolutely addictive.', '<h2>What is General Tso’s Chicken</h2><p>General Tso’s chicken is crispy, deep-fried chicken tossed in a sweet and tart sticky sauce that has just a bit of spice. Its origins are murky at best and no one is quite sure who created it, but everyone agrees that General Tso’s chicken is named after Zuo Zongtang, a military leader from the Qing dynasty who had most definitely not tasted the chicken that’s named after him. What we do know is that General Tso’s chicken is uniquely Chinese-American and incredibly delicious.</p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-480x600.webp 480w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-819x1024.webp 819w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-1229x1536.webp 1229w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-1229x1536.jpg 1229w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2.jpg\" alt=\"Super Crispy General Tso\'s Chicken | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2019/01/general-tsos-chicken-recipe-6081-2-1229x1536.jpg 1229w\" sizes=\"100vw\" width=\"1450\"></picture></p><h2>How to make General Tso’s Chicken</h2><p>This is one of the easiest Chinese dishes you’ll ever make:</p><ol><li><strong>Marinate:</strong> In a large bowl, whisk together the ingredients for the chicken coating until light and frothy. Toss in the chicken pieces and let sit at room temperature.&nbsp;</li><li><strong>Batter:</strong> Place 1 cup of cornstarch in a bowl. Spoon out 2 tablespoons of the chicken coating and whisk into the cornstarch to form small clumps. These will add extra crispy bits to your chicken. Working in batches: throughly coat several pieces of chicken in the cornstarch, and shake off the excess.</li><li><strong>Fry:</strong> Fry these however you like! See the sections below on air fryer vs oven baked vs deep fry. Deep fry will always produce the best results, but more often than not, we grab the air fryer for its ease and healthiness.</li><li><strong>Sauce:</strong> Once all of your chicken is done and resting in the oven, make the sauce. Add the sauce ingredients and cook, stirring, until the sauce comes to a boil and starts to thicken. Remove from heat, then add the chicken.</li><li><strong>Enjoy:</strong> Toss throughly to coat and enjoy immediately.</li></ol><h2>Ingredients for General Tso’s Chicken</h2><p>Most of the ingredients for General Tso’s chicken are fairly pedestrian items you’ll find in your pantry/fridge: chicken thighs, egg whites, soy sauce, corn starch, sugar, white vinegar, garlic, and ginger.</p>', b'1', '2023-02-17 17:03:54', NULL, 8, 10),
(3, 'Lasagna Soup The best weeknight meal', '1679003112.webp', 'Lasagna soup is one pot weeknight meal that comes together super quickly with all the flavors of lasagna.', '<h2>What is lasagna soup?</h2><p>Lasagna soup is exactly what it sounds like, lasagna in soup form! It’s all the amazing things about lasagna without the layering and time commitment. And best of all is the fact that you can eat it in a bowl with a spoon. It’s always lasagna soup season!</p><h2>Tiktok lasagna soup</h2><p>Lasagna soup is trending on Tiktok right now thanks to <a href=\"https://www.instagram.com/sza/\">SZA</a> and <a href=\"https://www.tiktok.com/@dannylovespasta/video/7187855599713996075\">@dannylovespasta</a>. SZA saw him making lasagna soup and asked him to drop the recipe, which he did of course! His lasagna soup doesn’t differ too much from mine, but if you want to make his exact recipe, just like SZA did, here it is:</p><p><strong>AD</strong></p><p>1 onion, chopped<br>2 cloves garlic, minced<br>1/2 lb ground beef<br>1/2 lb Italian sausage<br>1/4 tsp chili pepper flakes<br>1/2 tsp dried oregano<br>2 tbsp tomato paste<br>2 cups marinara sauce<br>3 cups chicken broth<br>1/2 cup heavy cream<br>1/2 box lasagna noodles, broken<br>1 cup shredded mozzarella<br>1/2 cup shredded parmesan<br>1/4 cup fresh basil, chopped</p><ol><li><strong>Sauté the onion</strong> and garlic in 2 tbsp olive oil over medium heat, until soft, about 2-3 minutes.</li><li><strong>Add the ground beef</strong> and Italian sausage and break up, cooking over medium high heat, until browned. Season with salt and pepper and stir in the oregano and chili flakes.</li><li><strong>Add the tomato paste</strong> and cook, over medium hight heat, stirring into the meat, until slightly caramelized, about 1-2 minutes. Add the marinara sauce, chicken broth, and heavy cream.</li><li><strong>Bring to a simmer</strong> and add the lasagna noodles. Cook until the lasagna noodles are al dente, according to the package directions.</li><li><strong>Stir in the cheeses</strong> and finish with fresh basil once the noodles are tender to your liking. Enjoy!</li></ol><h2>Lasagna soup ingredients</h2><ul><li><strong>onion and garlic</strong> – onions and garlic get cooked in olive oil until they turn into an aromatic mix that gives an amazing base layer of flavor to your soup.</li><li><strong>ground pork, beef, or sausage</strong> – feel free to use your favorite kind of ground meat here! You can even go with ground turkey, chicken, or crumbled tofu.</li><li><strong>crushed tomatoes</strong> – lasagna soup needs tomatoes and crushed is what I use, but truthfully, any canned tomatoes will work.</li><li><strong>chicken stock</strong> – chicken stock is going to give us the soup portion of lasagna soup. If you like your soup on the thicker side, just lower the amount of chicken stock.</li><li><strong>lasagna noodles</strong> – the star of the show! Use mini lasagna noodles called malfada corta or break up regular lasagna noodles into smaller pieces.</li><li><strong>herbs</strong> – freshly chopped oregano and basil are amazing in this soup. You can also use dried if it’s all you have on hand.</li><li><strong>toppings</strong> – CHEESE! Mozzarella, parmesan, a dollop of ricotta, a scoop of mascarpone, cottage cheese, this bowl of soup really an excuse to pile on the cheese, so go for it!</li></ul><h2>What kind of noodles for lasagna soup?</h2><p>We make lasagna soup with either mini lasagna noodles called <a href=\"https://amzn.to/3TMLHOe\">mafalda corta</a> or broken up lasagna noodles. Either will work!</p>', b'0', '2023-02-17 04:45:12', '2023-03-17 04:46:36', 10, 10),
(4, 'Tokyo Food Guide', '1679043136.jpg', 'Where and What to Eat in Tokyo', '<p><a href=\"https://www.google.ca/maps/place/Inaba+Wako/@35.700802,139.412983,17z/data=!3m1!4b1!4m2!3m1!1s0x6018e170f15b9a93:0xa94320104eee6fad\"><strong>Wako Tonkatsu</strong></a><br>Tonkatsu, for the uninitiated, is panko-crusted, deep fried pork cutlet. It’s crispy, crunchy, juicy and so, so delicious. Tonkatsu is basically a Japanese take on schnitzel. It’s typically served with fluffy white rice, piles and piles of finely shredded cabbage, pickles, and miso soup. Usually, you pick between rosu-katsu (loin) or hire-katsu (filet). Rosu is juicier and has more marbling whereas hire is a bit more lean. It’s funny, because when you look at a tonkatsu menu, you might think that everything looks the same (a la that scene in Lost in Translation), but really all the cuts taste different. Really though, you can’t go wrong with crispy juicy deep fried pork and addictive tonkatsu sauce. And ooh, don’t get me started on the sesame seeds – they give you a little mortar and pestle for you to grind your own sesame seeds to add to the sauce. Heaven. There are a ton of tonkatsu specialty houses (<a href=\"http://mai-sen.com/\">Maisen</a>, <a href=\"http://www.butagumi.com/nishiazabu/about.html\">Butagumi</a>, <a href=\"http://www.kimukatsu.com/\">Kimukatsu</a>, <a href=\"https://www.google.ca/webhp?sourceid=chrome-instant&amp;ion=1&amp;espv=2&amp;ie=UTF-8#safe=off&amp;q=tonki+meguro\">Tonki</a>), but we like visiting the <a href=\"https://www.google.com/maps/place/Tonkatsu+Wako/@35.6613165,139.7024726,17z/data=!4m12!1m6!3m5!1s0x60188ca7e9c9d9a1:0x93364ea32d6b0fe5!2sTonkatsu+Wako!8m2!3d35.6614361!4d139.7025723!3m4!1s0x60188ca7e9c9d9a1:0x93364ea32d6b0fe5!8m2!3d35.6614361!4d139.7025723\">Wako in Mark City</a>.</p><figure class=\"image\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2015/04/tenshige-tendon-akasaka-3.jpg\" alt=\"tenshige tendon akasaka-3\"></figure>', b'0', '2023-02-17 15:52:16', NULL, NULL, 8),
(5, 'A beginner’s guide to food photography', '1679043249.jpg', 'Steph is out sick with the flu to end all flus so I’m picking up the slack with some posts that we’ve been putting off, starting with this beginner’s guide to food photography.', '<p>It’s important to choose a good recipe to practice with because many dishes will wilt, congeal, or otherwise look unappealing when you’re taking a long time to take photos (I’m looking at you, egg yolks). This pasta is a nice stable dish that will look as good 30 minutes later as it does right out of the pan, because it’s glossy, stable, and most of all, pretty.</p><p>I adapted the recipe fairly heavily to make life simpler on myself and it ended up being a pretty amazing 6 ingredient pasta dish that you definitely need to try. I dropped BA’s ingredient-heavy sauce in favor of emulsifying cream, parmigiano, pancetta fat, and pasta water into a sauce. It came out awesome, and is easily one of the most impressive dishes you could make in 15 minutes.</p><p>This post is going to be pretty long, so it’s split up into 3 parts. Feel free to jump around or skip:</p><p>1. <a href=\"https://iamafoodblog.com/beginners-guide-to-food-photography-the-best-pasta-recipe-with-only-6-ingredients/#technicalstuff\"><strong>Technical Stuff:</strong></a> Cameras, Lenses, RAW vs JPEG, and Manual Shooting,<br>2. <a href=\"https://iamafoodblog.com/beginners-guide-to-food-photography-the-best-pasta-recipe-with-only-6-ingredients/#recreate\"><strong>How to recreate the shot:</strong></a> Lighting, Angles, Food Styling<br>3. <a href=\"https://iamafoodblog.com/beginners-guide-to-food-photography-the-best-pasta-recipe-with-only-6-ingredients/#giveaway\"><strong>Giveaway:</strong></a> How to get two free awesome Nikon lenses (they fit most mirrorless cameras too)</p><h2><strong>Part I – technical stuff you need to know for food photography</strong></h2><p><strong>CAMERAS</strong></p><p>They say the best camera is the one you have with you – I say the second best camera is the one you already own. There’s no real reason to run out and get a new camera just to shoot food. If you did want to however, there are a lot of cameras on the market these days, from mirrorless, to superzooms, to full frame SLRs that all claim to be the best thing since sliced bread, and they’re probably not wrong if you have <a href=\"http://amzn.to/2BUwMKW\">thousands of dollars</a>. On the more reasonable end of the pricing bin, <a href=\"http://amzn.to/2BSz3X3\">a good budget DSLR</a> will outperform anything else in its price range both on image quality and professional features. Even if you have thousands of dollars, when you walk into any professional studio, you’ll always see an SLR as the main camera used, and there’s a good reason for that: an SLR is a system that allows you to upgrade your component parts as you outgrow them.</p><p><br>&nbsp;</p>', b'1', '2023-03-01 15:54:09', NULL, 4, 3),
(6, 'Iceland The Ring Road', '1679043467.jpg', 'The beauty of Iceland left me breathless: the black sand beaches, the glacial blues, the pale yellow of the winter sun. I fell completely and utterly in love. It stole my heart in the best way possible: intensely and immediately. I know we’ll be back.', '<p>Last November Mike and I took a trip to Iceland. It’s a place that we’ve both been wanting to go to for a while and even though we’d been flirting with the idea for ages, we never made the plunge. The end 2015 was when we finally decided to go all in. We spent 12 days driving around the edge of Iceland on the Ring Road: the one highway that runs around the entire island. It’s also known as Route 1, and literally, it’s the only (mostly) paved highway that connects all of the tiny costal towns. Almost all of it is only two lanes and it is incredibly, beautifully photogenic.</p><p>Come morning though, when I looked out the window, my jaw dropped. We were just on the side of the highway, at a little hotel but the scene before me was incredible. The sky was immense, the horizon was flat, and there was a light dusting of icing powder snow gently covering the houses in the distance. I’m sure Icelanders would laugh at me if they saw my reaction because it’s equivalent to me staring in awe at the side of I5. Really though, the landscape in Iceland is like nothing I’ve ever seen.</p><figure class=\"image\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2016/02/IAM_2066w.jpg\" alt=\"iceland - www.iamafoodblog.com\"></figure>', b'0', '2023-03-01 15:57:47', NULL, NULL, 8),
(7, 'Bulgogi-Super Savory Korean Grilled Meat', '1679043584.webp', 'Whether on a Korean BBQ pan or non-stick skillet, addictive and melt in your mouth bulgogi deserves to be in your weeknight dinner rotation.', '<figure class=\"image\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2020/11/bulgogi-8097.jpg\" alt=\"bulgogi | www.iamafoodblog.com\"></figure><h2>What is bulgogi?</h2><p>Bulgogi is a classic <a href=\"https://iamafoodblog.com/korean-bbq/\">Korean BBQ</a> meat item. It’s typically a thinly sliced cut of beef that’s been marinated in a pear-soy-onion mix. The meat is then quickly charred on a Korean BBQ plate over an open flame. At home, people crisp it up in a pan on the stove. It’s served up with rice, lettuce, and little kimchi-forward appetizers and pickles.</p>', b'0', '2023-03-01 15:59:45', NULL, 8, 1),
(8, 'TikTok Hot Chocolate Bombs', '1679044712.webp', 'When you pour hot milk over these hot chocolate bombs, they melt and magically release the marshmallows and cocoa hiding inside.', '<figure class=\"image\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2020/11/hot-chocolate-bombs-8485.jpg\" alt=\"snowman peppermint hot chocolate bombs | www.iamafoodblog.com\"></figure><h2>How to make homemade hot chocolate bombs</h2><ol><li><strong>Melt your chocolate.</strong> Use the microwave to melt the chocolate melts or chocolate stirring in between until everything is smooth and pourable.</li><li><strong>Fill the molds.</strong> Scoop some chocolate into the mold and use the back of a spoon or pastry brush to push the melted chocolate around the molds, making it thick enough along the sides and edges. Pop the molds into the freezer for 5-10 minutes to set.</li><li><strong>Remove the chocolate from the molds.</strong> Gently push the half spheres out of the silicone mold.</li><li><strong>Melt the edges.</strong> Microwave a microwave safe plate for a minute, you want the plate to be just hot enough to melt the chocolate. Pick up the empty half of the chocolate bomb and place it on the warm plate for a couple of seconds, just until it melts.</li><li><strong>Fill.</strong> Add 1 tablespoon hot cocoa powder and mini marshmallows (and any other add-ins you want) to half of the spheres. Pick up another half and melt the edge on the warm plate then push the two sides together to seal.</li><li><strong>Decorate.</strong> Drizzle on some extra chocolate, decorate with crushed cookies, candy, or sprinkles!</li></ol><p>If you don’t have a mold, wrap two eggs in saran wrap and dip them in the melted chocolate. Place on a plate and let set. Dip them again (so the shell is slightly thick), then melt the edges, add the insides, and seal.</p>', b'1', '2023-03-17 16:18:32', NULL, NULL, 1),
(9, 'Instant Pot Pasta and Meatballs', '1679055414.jpg', 'Instant pot pasta and meatballs is the answer to what’s for dinner. It’s quick and easy, super cozy comfort food for those days when you want real food, but you’re just done with it all.', '<p>I know what you’re thinking: meatballs on a weekday?! Yes, it’s true, after a long day of work the last thing I want to do is roll meatballs. In fact, getting delivery is probably my most favorite way to have a relaxing night. But, sometimes only homemade will do. In those cases, homemade plus Instant Pot is the answer.</p><h2>Instant pot pasta is easy</h2><p>Is this recipe super quick to make? Yes and no. It only needs 5 minutes on high pressure in your Instant Pot, but of course it takes time for your IP to come up to pressure. Also, you need to mix and roll out meatballs. But, you don’t have to cook and drain your pasta and you don’t have to worry about hanging out near the stove in case your tomato sauce starts splattering. Instead, you can do the prep, set it, and forget it. Or, you know, have a quick shower, change into comfy clothes and pour yourself a glass of wine or five.</p><figure class=\"image\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2020/02/instant-pot-meatballs-1421.jpg\" alt=\"instant pot pasta and meatballs | www.iamafoodblog.com\"></figure>', b'0', '2023-03-17 16:20:15', '2023-03-17 19:16:54', NULL, 1),
(10, 'Green Chile Chicken Enchiladas', '1679410165.webp', 'Homemade-from-scratch green chile enchilada sauce, shredded chicken breast, and fluffy corn tortillas make for the best ever chicken enchiladas.', '<p><strong>If you’re looking for a cozy, warming, filling, all-in-one dish, enchiladas are it!</strong></p><p>Corn tortillas wrapped up around a super savory meaty filling, smothered in homemade enchilada sauce and topped off with cheese…drool.</p><p>I first fell in love with enchiladas in New Mexico. Mike and I were on a road trip and boy oh boy did I fall hard for the the land of enchantment – which handily happens to be the state slogan. One of the best meals we ate was at <a href=\"https://maryandtitoscafeabq.com/\">Mary &amp; Tito’s</a>: the enchiladas (extra chile please!) are something I still dream about.</p><p><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/mary-titos_8488.jpg\" alt=\"mary &amp; titos new mexico | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/mary-titos_8488.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/mary-titos_8488-600x401.jpg 600w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/mary-titos_8488-1024x684.jpg 1024w\" sizes=\"100vw\" width=\"1450\"></p><p>If you love enchiladas that are plump, juicy, full of filling, with a lot of sauce and cheese, this is the enchilada recipe for you!</p><p><strong>AD</strong></p><h2>What is an enchilada?</h2><p>If you haven’t had the pleasure of having one before, an enchilada is a rolled corn tortilla stuffed with meat (or beans or vegetables), covered with sauce, and baked. Enchiladas are originally from Mexico, but a lot of people associate them with American Tex-mex. The ones we are making today are New Mexico style, but they are both really good!</p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099-600x401.webp 600w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099-1024x684.webp 1024w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099-600x401.jpg 600w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099-1024x684.jpg 1024w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099.jpg\" alt=\"green enchiladas | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099-600x401.jpg 600w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4099-1024x684.jpg 1024w\" sizes=\"100vw\" width=\"1450\"></picture></p><h2>How to make enchiladas</h2><p>They may seem complicated, but if you can roll up a tortilla, you can enchilada!</p><ol><li><strong>Prep the sauce.</strong> We’re going to go all out and make a homemade green enchilada sauce but if you’re in a hurry, you can used jarred enchilada sauce – you can find both red and green sauce in the Mexican aisle at the grocery store.</li><li><strong>Make the filling.</strong> Don’t go rolling up just plain meat inside your enchiladas! You want the filling to be flavorful, juicy, and moist. Give your filling an extra boost by mixing in a good amount of enchilada sauce and cheese.</li><li><strong>Roll.</strong> Time to roll! Lightly heat up your tortilla, the spoon some filling in the center. Roll the tortilla up tightly and place it seam side down in an oven safe baking dish.</li><li><strong>Sauce.</strong> Spoon on some extra enchilada sauce and finish with generous amount of cheese.</li><li><strong>Bake.</strong> Bake the enchiladas until they are heated through and the cheese is melty and delicious.</li><li><strong>Top and enjoy!</strong> Finish everything off with some toppings: cilantro, onions, salsa, sour cream, extra chiles. Enjoy hot!</li></ol><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-480x600.webp 480w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-819x1024.webp 819w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-1229x1536.webp 1229w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-1229x1536.jpg 1229w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2.jpg\" alt=\"best enchilada | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/01/green-chile-chicken-enchiladas-4093-2-1229x1536.jpg 1229w\" sizes=\"100vw\" width=\"1450\"></picture></p>', b'1', '2023-03-21 21:49:25', NULL, 9, 10),
(11, 'Tiktok Green Goddess Salad', '1679410331.webp', 'This salad has been all over my Tiktok. Green goddess salad isn’t anything new, but this version does it with a twist and it’s pretty amazing. If you have any resolutions this year to eat healthier or go vegan-lite or full on vegan, this salad should be in your back pocket.', '<h2>What is green goddess salad?</h2><p>Any salad that’s tossed with green goddess dressing is a green goddess salad. There are hundreds of takes and variations which is nice because it’s perfectly customizable.</p><p><strong>AD</strong></p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-480x600.webp 480w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-819x1024.webp 819w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-1228x1536.webp 1228w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-1228x1536.jpg 1228w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174.jpg\" alt=\"green goddess salad | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0174-1228x1536.jpg 1228w\" sizes=\"100vw\" width=\"1450\"></picture></p><h2>Green goddess salad dressing</h2><p>Its pretty green tint is what inspired the name “green goddess.” Invented in San Francisco, the original recipe calls for anchovies, green onions, parsley, tarragon, mayo, sour cream, and chives all blended into a creamy tangy dressing. The green goddess salad dressing we’re making today doesn’t have much in common with the classic aside from the chives and green onions. There’s no anchovies, mayo, or sour cream, making it completely vegan. The dressing is a riff off vegan pesto and is herby, fresh, bright, and slightly tangy. It also has an addictive cheesiness to it because of the nutritional yeast.</p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167-600x401.webp 600w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167-1024x684.webp 1024w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167-600x401.jpg 600w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167-1024x684.jpg 1024w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167.jpg\" alt=\"green goddess salad dressing | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167-600x401.jpg 600w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2022/01/tiktok-green-goddess-salad-0167-1024x684.jpg 1024w\" sizes=\"100vw\" width=\"1450\"></picture></p><h2>Green goddess salad ingredients</h2><p>The salad itself is simply cabbage, cucumbers, green onions, and chives, all cut into a very fine dice, similar to a finely chopped coleslaw. The dressing is Melissa’s green goddess dressing, which is a take on a vegan pesto with walnuts and nutritional yeast instead of pine nuts and parmesan.</p><h2>How to make green goddess dressing</h2><p>For the dressing you’ll need:</p><ul><li><strong>lemons</strong> – the juice of two lemons adds freshness and acidity</li><li><strong>olive oil</strong> – extra virgin olive oil for the good fats</li><li><strong>rice vinegar</strong> – a bit of extra tang and hint of sweetness</li><li><strong>shallot</strong> – a sweeter onion flavor</li><li><strong>garlic</strong> – because garlic</li><li><strong>basil</strong> – for that herby freshness found in pesto</li><li><strong>spinach</strong> – for a bit of extra green</li><li><strong>nutritional yeast</strong> – adds cheesy savoriness and B12 vitamins</li><li><strong>walnuts</strong> – a hint of a nutty base</li><li><strong>salt</strong> – to meld all the flavors and highlight the highs</li></ul><p>Place the ingredients into a blender, with the liquid ingredients first, then blend until smooth and creamy.</p>', b'1', '2023-03-21 21:52:11', NULL, 6, 10),
(12, 'Foolproof Spatchcock Turkey', '1679410390.webp', 'Want a beautiful roast turkey in under two hours? Spatchcock turkey is the answer – flattening out the bird gives you juicy meat and crispy skin, every time.', '<h2>What is spatchcock turkey?</h2><p>Spatchcocking is a fancy way of saying removing the backbone and flattening the bird before you roast it. It’s superior to roasting a bird whole because it makes for even cooking, since the thighs aren’t covered by the legs and the delicate white meat isn’t exposed right up top. It also makes for crispier skin, better presentation, and lets you use the backbone and other bits to make gravy and stock right away.</p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206-600x400.webp 600w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206-1024x683.webp 1024w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206-600x400.jpg 600w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206-1024x683.jpg 1024w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206.jpg\" alt=\"spatchcock turkey thanksgiving dinner | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206-600x400.jpg 600w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2017/11/spatchcock-turkey-3206-1024x683.jpg 1024w\" sizes=\"100vw\" width=\"1450\"></picture></p><h2>How to spatchcock a turkey</h2><ol><li><strong>Prep.</strong> Pat the turkey dry with paper towels. It might be best to work in a large clean deep sink or in a large roasting pan. Flip the turkey so that it’s breast side down.</li><li><strong>Remove the backbone.</strong>&nbsp;Hold the turkey firmly and use a pair of kitchen shears (you definitely need kitchen shears) to cut alongside the backbone, starting where the tail meets the thigh. Cut all the way up until the turkey is split up to the neck. Push the turkey open slightly and then repeat on the other side, carefully cutting alongside the other side of the backbone. This side may be a bit trickier, so go slow.</li><li><strong>Trim.</strong> Trim off any excess fat or skin you might see. I took off the tail and the hood of fat near the neck. You can use the trimmings to make the best turkey gravy ever.</li><li><strong>Flip and flatten.</strong> Flip the turkey over so that the breast is facing up and push down on the ridge breast bone, <strong>hard</strong>. You should hear a couple of cracks and the turkey should be flatter. Tuck the wing tips behind the breast so they don’t burn.</li><li><strong>Season.</strong> Place the turkey on your prepared rack and baking sheet and rub with 1 tablespoon of oil. Season with salt and freshly ground pepper.</li></ol>', b'0', '2023-03-21 21:53:10', NULL, 7, 10),
(13, 'The Best Meatball Sub Recipe', '1679410452.webp', 'Super tender and tasty meatballs braised in a tomato-y sauce topped off with melty cheese in a toasty baguette.', '<h2>What makes a good meatball sub?</h2><p>Good meatball subs have big, soft, tender, juicy meatballs. I feel like meatball subs shouldn’t have meatballs that have been crisped up or browned in any way. The meatballs should just about fall apart the instant they hit your lips. The sauce should permeate and cling to the surface of the balls and they should be good enough to eat on their own but even better when put into a saucy, cheesy sandwich.</p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-480x600.webp 480w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-819x1024.webp 819w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-1228x1536.webp 1228w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-1228x1536.jpg 1228w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2.jpg\" alt=\"meatball sub recipe | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2018/03/the-best-meatball-sub_8134-2-1228x1536.jpg 1228w\" sizes=\"100vw\" width=\"1450\"></picture></p><p><strong>AD</strong></p><h2>The absolute best way to make meatball subs</h2><p>Here’s how I like to build my sandwiches:</p><ol><li><strong>Choose great bread.</strong>&nbsp;You can go with whatever bread you love. We used baguettes here because this is a love story about meatball subs and baguettes. Cut the bread in half lengthwise.</li><li><strong>Butter the bread.</strong> This is absolutely necessary because the buttery bread with the tomato sauce is heaven. Bonus points if you use garlic butter! You don’t need to toast the bread on it’s own because it’s going to get a little toasty in the oven while the cheese melts.</li><li><strong>Sauce your bread.</strong> After the butter, you need to sauce your bread. Some people don’t put sauce on the bottom of their subs, but I feel like you need that sauciness.</li><li><strong>Cheese and meatball and cheese.</strong> Top the sauce off with shaved parmesan because cheese then with some extra saucy meatballs. On top of that you need a cozy blanket of low moisture mozzarella cheese and a shower of more parmesan.</li><li><strong>Melt.</strong> The other side of your sandwich should get some extra sauce too. Everything is popped into the oven until the cheese gets gooey and delicious. Close it up and you’re in meatball sub heaven!</li></ol>', b'0', '2023-03-21 21:54:12', NULL, 4, 10),
(14, 'Dreamy Sweet and Spicy Korean Rice Cakes', '1679410650.webp', 'Tteokbokki is probably THE most famous street food from Korea: chewy rice cakes simmered in an addictive mix of sweet, savory, spicy sauce.', '<h2>What is tteokbokki?</h2><p>They’re spicy Korean rice cakes. Tteokbokki literally means stir fried rice cakes: tteok is the word for rice cake and bokki means fried. It’s an extremely popular dish, both as street food and comfort food at home. Tteokbokki are made with cylindrical rice cakes simmered in a thick and spicy sauce.</p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-480x600.webp 480w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-819x1024.webp 819w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-1229x1536.webp 1229w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-1229x1536.jpg 1229w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568.jpg\" alt=\"tteokbokki | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4568-1229x1536.jpg 1229w\" sizes=\"100vw\" width=\"1450\"></picture></p><h2>What does tteokbokki taste like?</h2><p>It tastes like heaven! If you love carbs, you’ll love tteokbokki. It’s chewy and filling, sweet and spicy and savory. If you haven’t had it before, think of it like a savory mochi or maybe like a gnocchi in a spicy sauce. Korean rice cakes are chewy and bouncy. The rice cakes themselves are very mild but when you cook them in sauce, they soak up flavor like a sponge and become incredibly delicious. Many tteokbokki also have fish cakes and boiled eggs added in for extra flavor and protein.</p><p><strong>AD</strong></p><p><picture><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592.webp 1450w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-480x600.webp 480w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-819x1024.webp 819w,https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-1229x1536.webp 1229w\" type=\"image/webp\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><source srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-1229x1536.jpg 1229w\" type=\"image/jpeg\" sizes=\"(max-width: 1450px) 100vw, 1450px\"><img src=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592.jpg\" alt=\"tteokbokki | www.iamafoodblog.com\" srcset=\"https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592.jpg 1450w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-480x600.jpg 480w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-819x1024.jpg 819w, https://iamafoodblog.b-cdn.net/wp-content/uploads/2021/07/tteokbokki-4592-1229x1536.jpg 1229w\" sizes=\"100vw\" width=\"1450\"></picture></p><h2>How to make tteokbokki</h2><ol><li><strong>Soak the rice cakes.</strong> Soak the rice cakes in a bit of warm tap water to loosen and soften them up.</li><li><strong>Make the sauce.</strong> While the rice cakes are soaking, mix together the tteokbokki sauce in a small bowl: gochujang, gochugaru, soy sauce, sugar, and garlic.</li><li><strong>Simmer.</strong> Stir the sauce into some anchovy stock and bring to a simmer. Add the rice cakes and cook until the sauce reduces and the rice cakes are chewy, soft, and heated through.</li><li><strong>Enjoy!</strong> Finish with a drizzle of toasted sesame oil, toasted sesame seeds, and sliced scallions and enjoy warm.</li></ol>', b'0', '2023-03-21 21:57:30', NULL, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `postId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save`
--

INSERT INTO `save` (`id`, `userId`, `postId`) VALUES
(1, 1, 6),
(2, 1, 9),
(3, 5, 9),
(4, 9, 9),
(5, 1, 7),
(6, 1, 4),
(7, 1, 5),
(8, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `payment`, `price`, `createdAt`, `userId`) VALUES
(1, '5 Months', 'Paypal', 40, '2023-03-19 21:54:54', 1),
(7, '5 Months', 'Paypal', 40, '2023-03-21 21:32:54', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `intro` text NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`, `intro`, `createdAt`, `updatedAt`) VALUES
(1, 'Foodie', 'If you\'re a true foodie at heart, then this tag is for you! Follow along for delicious recipes, culinary adventures, and foodie-approved tips and trickss.', '2023-02-02 22:43:05', '2023-03-22 01:40:48'),
(3, 'Photography', 'They say we eat with our eyes first, and this tag is all about celebrating the beauty of food through stunning photography. Get ready for some serious foodie eye candy!', '2023-02-02 22:44:03', '2023-03-17 04:24:02'),
(4, 'Delicious', 'If you\'re on the hunt for food that\'s as beautiful as it is delicious, then look no further than this tag. Feast your eyes on stunning food photography and get inspired to whip up something amazing in your own kitchen.', '2023-02-02 22:44:03', '2023-03-17 04:24:06'),
(6, 'Healthyeating', 'Sharing information and tips on eating a healthy and balanced diet. Food bloggers may post recipes that are low in calories or fat, or discuss the nutritional benefits of certain ingredients.', '2023-02-02 03:37:46', '2023-03-17 04:24:12'),
(7, 'Kitchen Hacks', 'Offer time-saving kitchen hacks, such as how to chop vegetables faster, how to make your own spice blends, or how to store leftovers properly.', '2023-03-17 04:17:03', '2023-03-17 04:22:14'),
(8, 'Travel', 'Feature food and travel experiences, such as visiting a farmers market, trying a new cuisine while traveling, or exploring local food traditions.', '2023-03-17 04:18:01', '2023-03-17 19:18:59'),
(9, 'Cooking Tips', 'How to properly season a dish, how to cook the perfect steak, or how to bake the perfect bread.', '2023-03-17 04:18:20', '2023-03-17 04:21:53'),
(10, 'Recipes', 'All types of recipes that you share on your blog, such as main dishes, sides, desserts, and more.', '2023-03-17 04:23:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `roleId` tinyint(1) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `image`, `roleId`, `createdAt`, `updatedAt`, `remember_token`) VALUES
(1, 'Khanh', 'daohoangmykhanh', 'daohoangmykhanh@gmail.com', '$2y$10$thDHS5vscfyZ86pBPGd49.G/BJJKhDXf8FGQTXCpc6NzlP2GsONTW', '1678963875.jpg', 1, '2023-02-04 16:29:42', '2023-03-19 16:58:51', NULL),
(2, 'James Thew', 'jamesthew', 'jamesthew@gmail.com', '$2y$10$o0ecfAGWCV53pKyPuG93QO6Ch7WKfSOCVdJXd.MpLZEFlVTy.mtza', '1679052142.jpg', 2, '2023-02-05 18:22:22', NULL, NULL),
(3, 'John Wickk', 'johnwick', 'johnwick@gmail.com', '$2y$10$ZwJjG1jJ0G01XpzrC/r6O.M5/jaDSidQw6Rnc1dsEm7RHNaSCtTJ6', '1679052457.jpg', 2, '2023-02-06 00:00:00', '2023-03-22 01:34:00', NULL),
(4, 'Ethan Nguyen', 'ethannguyen', 'ethannguyen@gmail.com', '$2y$10$thDHS5vscfyZ86pBPGd49.G/BJJKhDXf8FGQTXCpc6NzlP2GsONTW', '1679052544.jpg', 3, '2023-02-06 22:50:33', NULL, NULL),
(5, 'Totofo', 'totofo22', 'totofo22@gmail.com', '$2y$10$/xuSmBwM3bq0DyBbEERkbezmeZ3rvyenjGBYZLghxUUsE6jWzzzWS', '1679052602.jpg', 3, '2023-02-14 00:00:00', NULL, NULL),
(6, 'augsec', 'augsec289', 'augsec@gmail.com', '$2y$10$x9gLmm9Aae1UBDY1GY4hWetF3tT4Rehc/XkOi8KOWyxzsxUKEbKy.', NULL, 3, '2023-02-15 22:51:40', NULL, NULL),
(7, 'Khanh Hoang', 'khanhhoangmydao', 'khanhhoangmydao@gmail.com', '$2y$10$MRjY3yPs5fberzgx1sv9ae8CTIV5IHMh1y2W/8IoA7HYLtGFq26em', NULL, 3, '2023-02-16 01:55:21', NULL, NULL),
(9, 'Tim', 'tim', 'tim@gmail.com', '$2y$10$5mxKoHvkFbCC/puqxHveluWv2KgATvByzWgo1qmsfd9RGlAvSYraK', NULL, 3, '2023-02-16 02:00:00', NULL, NULL),
(10, 'Retsh Nguyen', 'retshnguyen', 'retshnguyen@gmail.com', '$2y$10$.lN1c.40odyVAo1f2dUXfuaL1NnFaiM8BFDdUkYe1Ex37k7T3.Tm6', NULL, 3, '2023-03-20 02:44:53', NULL, NULL),
(11, 'William', 'william', 'william@gmail.com', '$2y$10$4H.ZKaFxONoNAVmq/t3bw.y6ZRYWEgON.mRdNk4BbB.JF5b8QnXSe', '1679413009.jpg', 3, '2023-03-21 22:36:49', NULL, NULL),
(12, 'Harry', 'harry123', 'harry@gmail.com', '$2y$10$0kqKzHNP8sQHX8U8W6lNa.TyD.jaVT4ckIxUTt8jONEak28k2F7mG', '1679413062.jpg', 3, '2023-03-21 22:37:42', NULL, NULL),
(13, 'Miu', 'miu023', 'miu@gmail.com', '$2y$10$FGn9C93uHGbla7hW0sa5Luy90puIBeLuYONcT9G4vzKWtErQVVxyC', '1679413139.jpg', 3, '2023-03-21 22:38:59', NULL, NULL),
(14, 'lemon', 'lemon', 'lemon@gmail.com', '$2y$10$kS0MBOgq76JcqkVv8NAdteKNYqMpqHFFUorUWosqu4ws1HZFVYD4.', '1679413173.jpg', 3, '2023-03-21 22:39:33', NULL, NULL),
(15, 'chilly', 'chilly', 'chilly@gmail.com', '$2y$10$oCVtFL1kvgCXSxAllHDYW.OmCichRmafY/Ft1iZYQAb2UAlHsQ/di', '1679413264.jpg', 3, '2023-03-21 22:41:04', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postId` (`postId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `tagId` (`tagId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `love`
--
ALTER TABLE `love`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `save`
--
ALTER TABLE `save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `love`
--
ALTER TABLE `love`
  ADD CONSTRAINT `love_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `love_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`tagId`) REFERENCES `tag` (`id`);

--
-- Constraints for table `save`
--
ALTER TABLE `save`
  ADD CONSTRAINT `save_ibfk_1` FOREIGN KEY (`postId`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `save_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD CONSTRAINT `subscribe_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
