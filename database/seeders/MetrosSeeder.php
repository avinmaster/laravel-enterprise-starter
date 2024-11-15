<?php

namespace Database\Seeders;

use App\Models\Metro;
use Illuminate\Database\Seeder;

class MetrosSeeder extends Seeder
{
    public function run(): void
    {
        $metros = [
            [
                "key" => "000",
                "name" => "Unknown Metro"
            ],
            [
                "key" => "500",
                "name" => "Portland-Auburn, ME"
            ],
            [
                "key" => "501",
                "name" => "New York, NY"
            ],
            [
                "key" => "502",
                "name" => "Binghamton, NY"
            ],
            [
                "key" => "503",
                "name" => "Macon, GA"
            ],
            [
                "key" => "504",
                "name" => "Philadelphia, PA"
            ],
            [
                "key" => "505",
                "name" => "Detroit, MI"
            ],
            [
                "key" => "506",
                "name" => "Boston, MA-Manchester, NH"
            ],
            [
                "key" => "507",
                "name" => "Savannah, GA"
            ],
            [
                "key" => "508",
                "name" => "Pittsburgh, PA"
            ],
            [
                "key" => "509",
                "name" => "Ft. Wayne, IN"
            ],
            [
                "key" => "510",
                "name" => "Cleveland-Akron (Canton), OH"
            ],
            [
                "key" => "511",
                "name" => "Washington, DC (Hagerstown, MD)"
            ],
            [
                "key" => "512",
                "name" => "Baltimore, MD"
            ],
            [
                "key" => "513",
                "name" => "Flint-Saginaw-Bay City, MI"
            ],
            [
                "key" => "514",
                "name" => "Buffalo, NY"
            ],
            [
                "key" => "515",
                "name" => "Cincinnati, OH"
            ],
            [
                "key" => "516",
                "name" => "Erie, PA"
            ],
            [
                "key" => "517",
                "name" => "Charlotte, NC"
            ],
            [
                "key" => "518",
                "name" => "Greensboro-High Point-Winston Salem, NC"
            ],
            [
                "key" => "519",
                "name" => "Charleston, SC"
            ],
            [
                "key" => "520",
                "name" => "Augusta, GA"
            ],
            [
                "key" => "521",
                "name" => "Providence, RI-New Bedford, MA"
            ],
            [
                "key" => "522",
                "name" => "Columbus, GA"
            ],
            [
                "key" => "523",
                "name" => "Burlington, VT-Plattsburgh, NY"
            ],
            [
                "key" => "524",
                "name" => "Atlanta, GA"
            ],
            [
                "key" => "525",
                "name" => "Albany, GA"
            ],
            [
                "key" => "526",
                "name" => "Utica, NY"
            ],
            [
                "key" => "527",
                "name" => "Indianapolis, IN"
            ],
            [
                "key" => "528",
                "name" => "Miami-Ft. Lauderdale, FL"
            ],
            [
                "key" => "529",
                "name" => "Louisville, KY"
            ],
            [
                "key" => "530",
                "name" => "Tallahassee, FL-Thomasville, GA"
            ],
            [
                "key" => "531",
                "name" => "Tri-Cities, TN-VA"
            ],
            [
                "key" => "532",
                "name" => "Albany-Schenectady-Troy, NY"
            ],
            [
                "key" => "533",
                "name" => "Hartford & New Haven, CT"
            ],
            [
                "key" => "534",
                "name" => "Orlando-Daytona Beach-Melbourne, FL"
            ],
            [
                "key" => "535",
                "name" => "Columbus, OH"
            ],
            [
                "key" => "536",
                "name" => "Youngstown, OH"
            ],
            [
                "key" => "537",
                "name" => "Bangor, ME"
            ],
            [
                "key" => "538",
                "name" => "Rochester, NY"
            ],
            [
                "key" => "539",
                "name" => "Tampa-St Petersburg (Sarasota), FL"
            ],
            [
                "key" => "540",
                "name" => "Traverse City-Cadillac, MI"
            ],
            [
                "key" => "541",
                "name" => "Lexington, KY"
            ],
            [
                "key" => "542",
                "name" => "Dayton, OH"
            ],
            [
                "key" => "543",
                "name" => "Springfield-Holyoke, MA"
            ],
            [
                "key" => "544",
                "name" => "Norfolk-Portsmouth-Newport News,VA"
            ],
            [
                "key" => "545",
                "name" => "Greenville-New Bern-Washington, NC"
            ],
            [
                "key" => "546",
                "name" => "Columbia, SC"
            ],
            [
                "key" => "547",
                "name" => "Toledo, OH"
            ],
            [
                "key" => "548",
                "name" => "West Palm Beach-Ft. Pierce, FL"
            ],
            [
                "key" => "549",
                "name" => "Watertown, NY"
            ],
            [
                "key" => "550",
                "name" => "Wilmington, NC"
            ],
            [
                "key" => "551",
                "name" => "Lansing, MI"
            ],
            [
                "key" => "552",
                "name" => "Presque Isle, ME"
            ],
            [
                "key" => "553",
                "name" => "Marquette, MI"
            ],
            [
                "key" => "554",
                "name" => "Wheeling, WV-Steubenville, OH"
            ],
            [
                "key" => "555",
                "name" => "Syracuse, NY"
            ],
            [
                "key" => "556",
                "name" => "Richmond-Petersburg, VA"
            ],
            [
                "key" => "557",
                "name" => "Knoxville, TN"
            ],
            [
                "key" => "558",
                "name" => "Lima, OH"
            ],
            [
                "key" => "559",
                "name" => "Bluefield-Beckley-Oak Hill, WV"
            ],
            [
                "key" => "560",
                "name" => "Raleigh-Durham (Fayetteville), NC"
            ],
            [
                "key" => "561",
                "name" => "Jacksonville, FL"
            ],
            [
                "key" => "563",
                "name" => "Grand Rapids-Kalamazoo-Battle Creek, MI"
            ],
            [
                "key" => "564",
                "name" => "Charleston-Huntington, WV"
            ],
            [
                "key" => "565",
                "name" => "Elmira, NY"
            ],
            [
                "key" => "566",
                "name" => "Harrisburg-Lancaster-Lebanon-York, PA"
            ],
            [
                "key" => "567",
                "name" => "Greenville-Spartanburg, SC-Asheville, NC-Anderson, SC"
            ],
            [
                "key" => "569",
                "name" => "Harrisonburg, VA"
            ],
            [
                "key" => "570",
                "name" => "Florence-Myrtle Beach, SC"
            ],
            [
                "key" => "571",
                "name" => "Ft. Myers-Naples, FL"
            ],
            [
                "key" => "573",
                "name" => "Roanoke-Lynchburg, VA"
            ],
            [
                "key" => "574",
                "name" => "Johnstown-Altoona, PA"
            ],
            [
                "key" => "575",
                "name" => "Chattanooga, TN"
            ],
            [
                "key" => "576",
                "name" => "Salisbury, MD"
            ],
            [
                "key" => "577",
                "name" => "Wilkes Barre-Scranton, PA"
            ],
            [
                "key" => "581",
                "name" => "Terre Haute, IN"
            ],
            [
                "key" => "582",
                "name" => "Lafayette, IN"
            ],
            [
                "key" => "583",
                "name" => "Alpena, MI"
            ],
            [
                "key" => "584",
                "name" => "Charlottesville, VA"
            ],
            [
                "key" => "588",
                "name" => "South Bend-Elkhart, IN"
            ],
            [
                "key" => "592",
                "name" => "Gainesville, FL"
            ],
            [
                "key" => "596",
                "name" => "Zanesville, OH"
            ],
            [
                "key" => "597",
                "name" => "Parkersburg, WV"
            ],
            [
                "key" => "598",
                "name" => "Clarksburg-Weston, WV"
            ],
            [
                "key" => "600",
                "name" => "Corpus Christi, TX"
            ],
            [
                "key" => "602",
                "name" => "Chicago, IL"
            ],
            [
                "key" => "603",
                "name" => "Joplin, MO-Pittsburg, KS"
            ],
            [
                "key" => "604",
                "name" => "Columbia-Jefferson City, MO"
            ],
            [
                "key" => "605",
                "name" => "Topeka, KS"
            ],
            [
                "key" => "606",
                "name" => "Dothan, AL"
            ],
            [
                "key" => "609",
                "name" => "St. Louis, MO"
            ],
            [
                "key" => "610",
                "name" => "Rockford, IL"
            ],
            [
                "key" => "611",
                "name" => "Rochester, MN-Mason City, IA-Austin, MN"
            ],
            [
                "key" => "612",
                "name" => "Shreveport, LA"
            ],
            [
                "key" => "613",
                "name" => "Minneapolis-St. Paul, MN"
            ],
            [
                "key" => "616",
                "name" => "Kansas City, MO"
            ],
            [
                "key" => "617",
                "name" => "Milwaukee, WI"
            ],
            [
                "key" => "618",
                "name" => "Houston, TX"
            ],
            [
                "key" => "619",
                "name" => "Springfield, MO"
            ],
            [
                "key" => "622",
                "name" => "New Orleans, LA"
            ],
            [
                "key" => "623",
                "name" => "Dallas-Ft. Worth, TX"
            ],
            [
                "key" => "624",
                "name" => "Sioux City, IA"
            ],
            [
                "key" => "625",
                "name" => "Waco-Temple-Bryan, TX"
            ],
            [
                "key" => "626",
                "name" => "Victoria, TX"
            ],
            [
                "key" => "627",
                "name" => "Wichita Falls, TX & Lawton, OK"
            ],
            [
                "key" => "628",
                "name" => "Monroe, LA-El Dorado, AR"
            ],
            [
                "key" => "630",
                "name" => "Birmingham, AL"
            ],
            [
                "key" => "631",
                "name" => "Ottumwa, IA-Kirksville, MO"
            ],
            [
                "key" => "632",
                "name" => "Paducah, KY-Cape Girardeau, MO-Harrisburg-Mount Vernon, IL"
            ],
            [
                "key" => "633",
                "name" => "Odessa-Midland, TX"
            ],
            [
                "key" => "634",
                "name" => "Amarillo, TX"
            ],
            [
                "key" => "635",
                "name" => "Austin, TX"
            ],
            [
                "key" => "636",
                "name" => "Harlingen-Weslaco-Brownsville-McAllen, TX"
            ],
            [
                "key" => "637",
                "name" => "Cedar Rapids-Waterloo-Iowa City & Dubuque, IA"
            ],
            [
                "key" => "638",
                "name" => "St. Joseph, MO"
            ],
            [
                "key" => "639",
                "name" => "Jackson, TN"
            ],
            [
                "key" => "640",
                "name" => "Memphis, TN"
            ],
            [
                "key" => "641",
                "name" => "San Antonio, TX"
            ],
            [
                "key" => "642",
                "name" => "Lafayette, LA"
            ],
            [
                "key" => "643",
                "name" => "Lake Charles, LA"
            ],
            [
                "key" => "644",
                "name" => "Alexandria, LA"
            ],
            [
                "key" => "647",
                "name" => "Greenwood-Greenville, MS"
            ],
            [
                "key" => "648",
                "name" => "Champaign & Springfield-Decatur,IL"
            ],
            [
                "key" => "649",
                "name" => "Evansville, IN"
            ],
            [
                "key" => "650",
                "name" => "Oklahoma City, OK"
            ],
            [
                "key" => "651",
                "name" => "Lubbock, TX"
            ],
            [
                "key" => "652",
                "name" => "Omaha, NE"
            ],
            [
                "key" => "656",
                "name" => "Panama City, FL"
            ],
            [
                "key" => "657",
                "name" => "Sherman, TX-Ada, OK"
            ],
            [
                "key" => "658",
                "name" => "Green Bay-Appleton, WI"
            ],
            [
                "key" => "659",
                "name" => "Nashville, TN"
            ],
            [
                "key" => "661",
                "name" => "San Angelo, TX"
            ],
            [
                "key" => "662",
                "name" => "Abilene-Sweetwater, TX"
            ],
            [
                "key" => "669",
                "name" => "Madison, WI"
            ],
            [
                "key" => "670",
                "name" => "Ft. Smith-Fayetteville-Springdale-Rogers, AR"
            ],
            [
                "key" => "671",
                "name" => "Tulsa, OK"
            ],
            [
                "key" => "673",
                "name" => "Columbus-Tupelo-West Point, MS"
            ],
            [
                "key" => "675",
                "name" => "Peoria-Bloomington, IL"
            ],
            [
                "key" => "676",
                "name" => "Duluth, MN-Superior, WI"
            ],
            [
                "key" => "678",
                "name" => "Wichita-Hutchinson, KS"
            ],
            [
                "key" => "679",
                "name" => "Des Moines-Ames, IA"
            ],
            [
                "key" => "682",
                "name" => "Davenport,IA-Rock Island-Moline,IL"
            ],
            [
                "key" => "686",
                "name" => "Mobile, AL-Pensacola (Ft. Walton Beach), FL"
            ],
            [
                "key" => "687",
                "name" => "Minot-Bismarck-Dickinson(Williston), ND"
            ],
            [
                "key" => "691",
                "name" => "Huntsville-Decatur (Florence), AL"
            ],
            [
                "key" => "692",
                "name" => "Beaumont-Port Arthur, TX"
            ],
            [
                "key" => "693",
                "name" => "Little Rock-Pine Bluff, AR"
            ],
            [
                "key" => "698",
                "name" => "Montgomery (Selma), AL"
            ],
            [
                "key" => "702",
                "name" => "La Crosse-Eau Claire, WI"
            ],
            [
                "key" => "705",
                "name" => "Wausau-Rhinelander, WI"
            ],
            [
                "key" => "709",
                "name" => "Tyler-Longview(Lufkin & Nacogdoches), TX"
            ],
            [
                "key" => "710",
                "name" => "Hattiesburg-Laurel, MS"
            ],
            [
                "key" => "711",
                "name" => "Meridian, MS"
            ],
            [
                "key" => "716",
                "name" => "Baton Rouge, LA"
            ],
            [
                "key" => "717",
                "name" => "Quincy, IL-Hannibal, MO-Keokuk, IA"
            ],
            [
                "key" => "718",
                "name" => "Jackson, MS"
            ],
            [
                "key" => "722",
                "name" => "Lincoln & Hastings-Kearney, NE"
            ],
            [
                "key" => "724",
                "name" => "Fargo-Valley City, ND"
            ],
            [
                "key" => "725",
                "name" => "Sioux Falls(Mitchell), SD"
            ],
            [
                "key" => "734",
                "name" => "Jonesboro, AR"
            ],
            [
                "key" => "736",
                "name" => "Bowling Green, KY"
            ],
            [
                "key" => "737",
                "name" => "Mankato, MN"
            ],
            [
                "key" => "740",
                "name" => "North Platte, NE"
            ],
            [
                "key" => "743",
                "name" => "Anchorage, AK"
            ],
            [
                "key" => "744",
                "name" => "Honolulu, HI"
            ],
            [
                "key" => "745",
                "name" => "Fairbanks, AK"
            ],
            [
                "key" => "746",
                "name" => "Biloxi-Gulfport, MS"
            ],
            [
                "key" => "747",
                "name" => "Juneau, AK"
            ],
            [
                "key" => "749",
                "name" => "Laredo, TX"
            ],
            [
                "key" => "751",
                "name" => "Denver, CO"
            ],
            [
                "key" => "752",
                "name" => "Colorado Springs-Pueblo, CO"
            ],
            [
                "key" => "753",
                "name" => "Phoenix, AZ"
            ],
            [
                "key" => "754",
                "name" => "Butte-Bozeman, MT"
            ],
            [
                "key" => "755",
                "name" => "Great Falls, MT"
            ],
            [
                "key" => "756",
                "name" => "Billings, MT"
            ],
            [
                "key" => "757",
                "name" => "Boise, ID"
            ],
            [
                "key" => "758",
                "name" => "Idaho Falls-Pocatello, ID"
            ],
            [
                "key" => "759",
                "name" => "Cheyenne, WY-Scottsbluff, NE"
            ],
            [
                "key" => "760",
                "name" => "Twin Falls, ID"
            ],
            [
                "key" => "762",
                "name" => "Missoula, MT"
            ],
            [
                "key" => "764",
                "name" => "Rapid City, SD"
            ],
            [
                "key" => "765",
                "name" => "El Paso, TX"
            ],
            [
                "key" => "766",
                "name" => "Helena, MT"
            ],
            [
                "key" => "767",
                "name" => "Casper-Riverton, WY"
            ],
            [
                "key" => "770",
                "name" => "Salt Lake City, UT"
            ],
            [
                "key" => "771",
                "name" => "Yuma, AZ-El Centro, CA"
            ],
            [
                "key" => "773",
                "name" => "Grand Junction-Montrose, CO"
            ],
            [
                "key" => "789",
                "name" => "Tucson (Sierra Vista), AZ"
            ],
            [
                "key" => "790",
                "name" => "Albuquerque-Santa Fe, NM"
            ],
            [
                "key" => "798",
                "name" => "Glendive, MT"
            ],
            [
                "key" => "800",
                "name" => "Bakersfield, CA"
            ],
            [
                "key" => "801",
                "name" => "Eugene, OR"
            ],
            [
                "key" => "802",
                "name" => "Eureka, CA"
            ],
            [
                "key" => "803",
                "name" => "Los Angeles, CA"
            ],
            [
                "key" => "804",
                "name" => "Palm Springs, CA"
            ],
            [
                "key" => "807",
                "name" => "San Francisco-Oakland-San Jose, CA"
            ],
            [
                "key" => "810",
                "name" => "Yakima-Pasco-Richland-Kennewick, WA"
            ],
            [
                "key" => "811",
                "name" => "Reno, NV"
            ],
            [
                "key" => "813",
                "name" => "Medford-Klamath Falls, OR"
            ],
            [
                "key" => "819",
                "name" => "Seattle-Tacoma, WA"
            ],
            [
                "key" => "820",
                "name" => "Portland, OR"
            ],
            [
                "key" => "821",
                "name" => "Bend, OR"
            ],
            [
                "key" => "825",
                "name" => "San Diego, CA"
            ],
            [
                "key" => "828",
                "name" => "Monterey-Salinas, CA"
            ],
            [
                "key" => "839",
                "name" => "Las Vegas, NV"
            ],
            [
                "key" => "855",
                "name" => "Santa Barbara-Santa Maria-San Luis Obispo, CA"
            ],
            [
                "key" => "862",
                "name" => "Sacramento-Stockton-Modesto, CA"
            ],
            [
                "key" => "866",
                "name" => "Fresno-Visalia, CA"
            ],
            [
                "key" => "868",
                "name" => "Chico-Redding, CA"
            ],
            [
                "key" => "881",
                "name" => "Spokane, WA"
            ]
        ];

        $query = Metro::query();

        $query->insert($metros);
    }
}

