<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "animals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO BREED VALUES ('CAT','Abyssinian'),('CAT','Australian Mist'),('CAT','Balinese'),('CAT','Bengal'),('CAT','Birman'),('CAT','Bombay'),('CAT','British Shorthair'),('CAT','Burmese'),('CAT','Burmilla'),('CAT','Cornish Rex'),('CAT','Devon Rex'),('CAT','Egyptian Mau'),('CAT','Exotic Shorthair'),('CAT','Japanese Bobtail'),('CAT','Korat'),('CAT','La Perms'),('CAT','Maine Coon'),('CAT','Manx'),('CAT','Norwegian Forest'),('CAT','Ocicat'),('CAT','Oriental Shorthair'),('CAT','Persian Longhair'),('CAT','Ragdoll'),('CAT','Russian Blue'),('CAT','Scottish Fold'),('CAT','Siamese'),('CAT','Siberian Forest'),('CAT','Singapura'),('CAT','Snowshoe'),('CAT','Somali'),('CAT','Sphynx'),('CAT','Tiffanie'),('CAT','Tonkinese'),('CAT','Turkish Van'),('DOG','Affenpinscher'),('DOG','Afghan Hound'),('DOG','Airedale Terrier'),('DOG','Alaskan Malamute'),('DOG','American Staffordshire Bull Terrier'),('DOG','Anatolian Shepherd Dog'),('DOG','Australian Cattle Dog'),('DOG','Australian Kelpie'),('DOG','Australian Shepherd Dog'),('DOG','Australian Silky Terrier'),('DOG','Australian Terrier'),('DOG','Basenji'),('DOG','Basset Fauve de Bretagne'),('DOG','Basset Hound'),('DOG','Beagle'),('DOG','Bearded Collie'),('DOG','Bedlington Terrier'),('DOG','Belgian Shepherd Dog '),('DOG','Bernese Mountain Dog'),('DOG','Bichon Frise'),('DOG','Bloodhound'),('DOG','Border Terrier'),('DOG','Borzoi'),('DOG','Boston Terrier'),('DOG','Bouvier des Flandres'),('DOG','Boxer'),('DOG','Bracco Italiano'),('DOG','Briard'),('DOG','Brittany'),('DOG','Bull Terrier'),('DOG','Bull Terrier Miniature'),('DOG','Bulldog'),('DOG','Bullmastiff'),('DOG','Cairn Terrier'),('DOG','Cavalier King Charles Spaniel'),('DOG','Cesky Terrier'),('DOG','Chesapeake Bay Retriever'),('DOG','Chihuahua '),('DOG','Chinese Crested'),('DOG','Chow Chow '),('DOG','Clumber Spaniel'),('DOG','Collie '),('DOG','Curly-Coated Retriever'),('DOG','Dachshund'),('DOG','Dalmatian'),('DOG','Dandie Dinmont Terrier'),('DOG','Deerhound'),('DOG','Dobermann'),('DOG','Dogue de Bordeaux'),('DOG','English Setter'),('DOG','English Springer Spaniel'),('DOG','English Toy Terrier (Black & Tan)'),('DOG','Field Spaniel'),('DOG','Finnish Lapphund'),('DOG','Finnish Spitz'),('DOG','Flat-Coated Retriever'),('DOG','Fox Terrier Smooth Coat'),('DOG','Fox Terrier Wire Coat'),('DOG','Foxhound'),('DOG','French Bulldog'),('DOG','German Shepherd Dog'),('DOG','German Short-Haired Pointer'),('DOG','German Spitz Klein'),('DOG','German Wire-Haired Pointer'),('DOG','Golden Retriever'),('DOG','Gordon Setter'),('DOG','Great Dane'),('DOG','Greyhound'),('DOG','Harrier Hound'),('DOG','Hungarian Vizsla'),('DOG','Hungarian Wire-Haired Vizsla'),('DOG','Ibizan Hound'),('DOG','Irish Setter'),('DOG','Irish Terrier'),('DOG','Irish Water Spaniel'),('DOG','Irish Wolfhound'),('DOG','Italian Greyhound'),('DOG','Japanese Akita'),('DOG','Japanese Chin'),('DOG','Japanese Spitz'),('DOG','Keeshond'),('DOG','Kerry Blue Terrier'),('DOG','King Charles Spaniel'),('DOG','Labrador Retriever'),('DOG','Lakeland Terrier'),('DOG','Leonberger'),('DOG','Lhaso Apso'),('DOG','Lowchen'),('DOG','Maltese'),('DOG','Manchester Terrier'),('DOG','Maremma Sheepdog'),('DOG','Mastiff'),('DOG','Newfoundland'),('DOG','Norfolk Terrier'),('DOG','Norwich Terrier'),('DOG','Nova Scotia Duck Tolling Retriever'),('DOG','Old English Sheepdog'),('DOG','Papillon'),('DOG','Parson Jack Russell Terrier'),('DOG','Pharaoh Hound'),('DOG','Pointer'),('DOG','Pomeranian'),('DOG','Poodle Miniature'),('DOG','Poodle Standard'),('DOG','Poodle Toy'),('DOG','Portuguese Water Dog'),('DOG','Pug'),('DOG','Pyrenean Mountain Dog'),('DOG','Rhodesian Ridgeback'),('DOG','Rottweiler'),('DOG','Saluki'),('DOG','Samoyed'),('DOG','Schipperke'),('DOG','Schnauzer Giant'),('DOG','Schnauzer Miniature'),('DOG','Schnauzer Standard'),('DOG','Scottish Terrier'),('DOG','Shar Pei'),('DOG','Shetland Sheepdog'),('DOG','Shih Tzu'),('DOG','Siberian Husky'),('DOG','Skye Terrier'),('DOG','Sloughi'),('DOG','Soft Coated Wheaten Terrier'),('DOG','St Bernard'),('DOG','Sussex Spaniel'),('DOG','Swedish Vallhund'),('DOG','Tenterfield Terrier'),('DOG','Tibetan Mastiff'),('DOG','Tibetan Spaniel'),('DOG','Tibetan Terrier'),('DOG','Weimaraner'),('DOG','Welsh Corgi '),('DOG','Welsh Springer Spaniel'),('DOG','Welsh Terrier'),('DOG','West Highland White Terrier'),('DOG','Whippet'),('DOG','Yorkshire Terrier'),('COW','	Abondance '),('COW','	Adaptaur '),('COW','	Afrikaner '),('COW','	Agerolese '),('COW','	Alambadi '),('COW','	Albera '),('COW','	American Milking Devon '),('COW','	Anatolian Black '),('COW','	Andalusian Black '),('COW','	Angus '),('COW','	Ankole-Watusi '),('COW','	Argentine Criollo '),('COW','	Armorican '),('COW','	Arouquesa '),('COW','	Asturian Valley '),('COW','	Aubrac '),('COW','	Australian Braford '),('COW','	Ayrshire '),('COW','	Bargur '),('COW','	Barzona '),('COW','	Bazadaise '),('COW','	Belgian Blue '),('COW','	Belgian Red '),('COW','	Belmont Red '),('COW','	Belted Galloway '),('COW','	Blaarkop '),('COW','	Black Hereford '),('COW','	Blonde d’Aquitaine '),('COW','	Boran '),('COW','	Brahman '),('COW','	Brangus '),('COW','	Braunvieh '),('COW','	Brava '),('COW','	Brown Swiss '),('COW','	Burlina '),('COW','	Busa '),('COW','	Cachena '),('COW','	Camargue '),('COW','	Canadian Speckle Park '),('COW','	Canadienne '),('COW','	Canchim '),('COW','	Caracu '),('COW','	Casta '),('COW','	Charolais '),('COW','	Chianina '),('COW','	Chinese Black Pied '),('COW','	Corriente '),('COW','	Corsican '),('COW','	Dangi '),('COW','	Danish Red '),('COW','	Deoni '),('COW','	Devon '),('COW','	Dexter '),('COW','	Dhanni '),('COW','	Droughtmaster '),('COW','	Dutch Belted '),('COW','	English Longhorn '),('COW','	Evolene '),('COW','	Finn '),('COW','	Fjall '),('COW','	Fleckvieh '),('COW','	Florida Cracker '),('COW','	French Simmental '),('COW','	Galloway '),('COW','	Gangatiri '),('COW','	Gaolao '),('COW','	Gascon '),('COW','	Gelbvieh '),('COW','	German Angus '),('COW','	Gir '),('COW','	Glan '),('COW','	Gloucester '),('COW','	Greek Shorthorn '),('COW','	Halikar '),('COW','	Haryana '),('COW','	Hays Converter '),('COW','	Heck '),('COW','	Hereford '),('COW','	Herens '),('COW','	Highland '),('COW','	Hinterwald '),('COW','	Holando-Argentino '),('COW','	Holstein Friesian '),('COW','	Hungarian Grey '),('COW','	Icelandic '),('COW','	Illawarra '),('COW','	Irish Moiled '),('COW','	Istoben '),('COW','	Jamaica Hope '),('COW','	Jersey '),('COW','	Jutland '),('COW','	Kankrej '),('COW','	Kangayam '),('COW','	Kazakh Whiteheaded '),('COW','	Kenkatha '),('COW','	Kerry '),('COW','	Kherigarh '),('COW','	Khillari '),('COW','	Kostroma '),('COW','	Krishna Valley '),('COW','	Kuri '),('COW','	Lourdais '),('COW','	Lowline '),('COW','	Luing '),('COW','	Lohani '),('COW','	Lithuanian Red '),('COW','	Lincoln Red '),('COW','	Limousin '),('COW','	Limia '),('COW','	Lebedyn '),('COW','	Latvian Brown '),('COW','	Madura '),('COW','	Maine-Anjou '),('COW','	Malnad Gidda '),('COW','	Malvi '),('COW','	Marchigiana '),('COW','	Maremmana '),('COW','	Maronesa '),('COW','	Mewati '),('COW','	Milking Shorthorn '),('COW','	Mirandesa '),('COW','	Mongolian '),('COW','	Montbéliarde '),('COW','	Murboden '),('COW','	Murnau-Werdenfels '),('COW','	Murray Grey '),('COW','	Nagori '),('COW','	N’dama '),('COW','	Nelore '),('COW','	Nguni '),('COW','	Nimari '),('COW','	Normande '),('COW','	Norwegian Red '),('COW','	Ongole '),('COW','	Pajuna '),('COW','	Pantaneiro '),('COW','	Parthenais '),('COW','	Pembroke '),('COW','	Pie Rouge des Plaines '),('COW','	Piedmontese '),('COW','	Pinzgauer '),('COW','	Pirenaica '),('COW','	Podolica '),('COW','	Polish Red '),('COW','	Ponwar '),('COW','	Punganur '),('COW','	Pustertaler Sprinzen '),('COW','	Ramo Grande '),('COW','	Randall '),('COW','	Rathi '),('COW','	Red Angus '),('COW','	Red Kandhari '),('COW','	Red Poll '),('COW','	Red Sindhi '),('COW','	Ringamala '),('COW','	Romagnola '),('COW','	Romosinuano '),('COW','	Rubia Gallega '),('COW','	Sahiwal '),('COW','	Santa Gertrudis '),('COW','	Sayaguesa '),('COW','	Senepol '),('COW','	Shetland '),('COW','	Shorthorn '),('COW','	Simmental '),('COW','	Siri '),('COW','	South Devon '),('COW','	Southern Yellow '),('COW','	Spanish Fighting Bull '),('COW','	Square Meater '),('COW','	Sussex '),('COW','	Swedish Red '),('COW','	Tarentaise '),('COW','	Telemark '),('COW','	Texas Longhorn '),('COW','	Tharparkar '),('COW','	Tswana '),('COW','	Tudanca '),('COW','	Tux '),('COW','	Tyrolese Grey '),('COW','	Ukrainian Grey '),('COW','	Umblachery '),('COW','	Vaynol '),('COW','	Vechur '),('COW','	Vorderwald '),('COW','	Welsh Black '),('COW','	White Fulani '),('COW','	White Park '),('COW','	Whitebred Shorthorn '),('COW','	Yakutian '),('COW','	Yanbian '),('COW','	Yurino'),('RABBIT','	Lionhead Rabbit '),('RABBIT','	Flemish Giant '),('RABBIT','	Contintental Giant '),('RABBIT','	Dutch Rabbit '),('RABBIT','	English Lop '),('RABBIT','	French Lop '),('RABBIT','	Holland Lop '),('RABBIT','	Mini Rex '),('RABBIT','	Netherland dwarf '),('RABBIT','	Polish Rabbit '),('RABBIT','	American '),('RABBIT','	American Fuzzy Lop '),('RABBIT','	American Sable '),('RABBIT','	Argente Brun '),('RABBIT','	Argente Crème '),('RABBIT','	Argente de Champagne '),('RABBIT','	Belgian Hare '),('RABBIT','	Beveren '),('RABBIT','	Blanc de Hotot '),('RABBIT','	Britannia Petite '),('RABBIT','	Californian '),('RABBIT','	Checkered Giant '),('RABBIT','	Chinchilla '),('RABBIT','	Cinnamon '),('RABBIT','	Dwarf Hotot '),('RABBIT','	Dwarf Lop '),('RABBIT','	English Angora '),('RABBIT','	English Spot '),('RABBIT','	Florida White '),('RABBIT','	French Angora '),('RABBIT','	Giant Angora '),('RABBIT','	Giant Papillon '),('RABBIT','	Harlequin '),('RABBIT','	Havana '),('RABBIT','	Himalayan '),('RABBIT','	Jersey Wooly '),('RABBIT','	Lilac '),('RABBIT','	New Zealand '),('RABBIT','	Palomino '),('RABBIT','	Rex '),('RABBIT','	Rhinelander '),('RABBIT','	Satin '),('RABBIT','	Satin Angora '),('RABBIT','	Silver '),('RABBIT','	Silver Fox '),('RABBIT','	Silver Marten '),('RABBIT','	Tan '),('RABBIT','Thrianta'),('RAT','	Aceh Rats '),('RAT','	Andaman Archipelago Rats '),('RAT','	Annandale’s Rats '),('RAT','	Arianus’ New Guinea Mountain Rats '),('RAT','	Australian Pale Field Rats '),('RAT','	Australian Swamp Rats '),('RAT','	Black Rat '),('RAT','	Bonthain Rats '),('RAT','	Brown Rat '),('RAT','	Bush Rats '),('RAT','	Cape York Rats '),('RAT','	Christmas Island Rats '),('RAT','	Dusky Rats '),('RAT','	Himalayan Field Rats '),('RAT','	Himalayan Rats '),('RAT','	Little Soft Furred Rats '),('RAT','	Long-haired Rats '),('RAT','	New Ireland Forest Rats '),('RAT','	Nillu Rats '),('RAT','	Polynesian Rats '),('RAT','	Rice-field Rats '),('RAT','	Sikkim Rats'),('TORTOISE','	African Spurred Tortoise '),('TORTOISE','	Aldabra Tortoise '),('TORTOISE','	Leopard Tortoise '),('TORTOISE','	Russian Tortoise '),('TORTOISE','	Sulcata Tortoise '),('TORTOISE','	Red-Footed Tortoise '),('TORTOISE','	Radiated Tortoise '),('TORTOISE','	Malacochersus Tornieri '),('TORTOISE','Pancake Tortoise) '),('TORTOISE','	Hermanns Tortoise '),('TORTOISE','	Marginated Tortoise '),('TORTOISE','	Gopher Tortoise '),('TORTOISE','	Greek Tortoise '),('TORTOISE','	Galapagos Tortoise '),('TORTOISE','	Elongated Tortoise '),('TORTOISE','	Hingeback Tortoise '),('TORTOISE','	Yellow Foot Tortoise '),('TORTOISE','	Desert Tortoise')";
if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>