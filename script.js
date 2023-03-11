var Tour_places = [
    {
        Month: 'January',
        Place: [['Jaipur ', ' The Lively Pink City.'], ['Jodhpur '], ['Pushkar ', ' For Spiritual Ambiance.'], ['Bikaner ', ' Sneak Peek The Traditions.',""], ['Keoladeo National Park', ' Enthralling Expeditions.'], ['Jaisalmer ', ' Gorgeous Golden City.'], ['Ranthambore ', ' Refreshing Escape For Wildlife Enthusiasts.'], ['Alwar ', ' Lively City With Relaxed Pace'], ['Nagaur ', ' Rare Interactions Amid Culture'], ['Pali ', ' Mystic Getaways'], ['Udaipur ', ' Spellbinding City Of Lakes'], ['Kumbalgarh ', ' Witness The Longest Fortification'], ['Jhalawar ', ' Beautiful Princely State'], ['Mount Abu ', ' Stunning Views Of Aravali'], ['Chittorgarh ', ' Relive The Folklores','']],
        Images: [
            './img/Place/Jaipur.png', './img/Place/jodhpur.jpg','./img/Place/Pushkar.jpg','./img/Place/bikaner.jpg','./img/Place/Keoladeo-National-Park.jpg','./img/Place/Jaisalmer.webp','./img/Place/Ranthambore-Jeep-Safari.jpg','./img/Place/alwar.jpg',
            './img/Place/Nagaur-Fort.webp','./img/Place/pali.jpg','./img/Place/Jaipur.png','./img/Place/udaipur.jpg','./img/Place/Kumbhalgarh-fort-wall.jpg','./img/Place/jhalawar.jpg','./img/Place/mountaabu.jpg','./img/Place/Chittorrgarh.jpg'
        ]

    }
    ,
    {
        Month: 'February',
        Place: [['Jaipur ', ' The Lively Pink City.'],
            ['Alwar ', ' Lively City With Relaxed Pace'],
            ['Mount Abu ', ' Stunning Views Of Aravali']],
        Images: [
            './img/Place/Jaipur.png', './img/Place/alwar.jpg','./img/Place/mountaabu.jpg'
        ]
    }
    ,
    {

    },
    {

    }
    ,
    {

    },
    {
        Month:'June',
        Place:[['Ajmer','A Pilgrimage Spot','This is one of the most prominent pilgrimage spots in the country and is also widely visited by a number of celebrities across the world. It is believed that anyone, irrespective of their faith and religion when offers a prayer in the Dargah can never go empty-handed. This tourist spot is also very famous for the sacred lake of Pushkar along with a number of temples located nearby. These delights are a must to explore while on your trip to Rajasthan in the summers.'],['Nakki Lake','A Sacred Picnic Spot','Nakki Lake, an ancient and sacred lake is a popular picnic spot among the friends and family. The lake is a popular tourist attraction as the ashes of Mahatma Gandhi had been immersed here, paving the way for the construction of Gandhi Ghat. The lake boasts a strong mythological history where it is believed that the lake has been dug out by using the nails for gaining shelter from Demon Banshkhali. Apart from this, there are varied mythological stories that exist regarding the formation of the lake. Visit this lake during the summers to experience the cool breeze of the lake and experience its divine history.']],
        Images:['./img/Place/ajmer.webp','./img/Place/nakki-lake.jpg']
    }
];
var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
//DATE

const date = new Date();
let month = months[date.getMonth()];
document.getElementById("TP_heading").innerHTML = month;

for (let index = 0; index < Tour_places.length; index++) {
    if('June'==months[index]){

   

var P_name = document.getElementById('P_name');
var P_dis = document.getElementById('P_dis');
var Full_dis = document.getElementById('Full_dis');
var i = 0;
var P_length = Tour_places[index]['Place'].length - 1;
P_name.innerText = Tour_places[index]['Place'][i][0];
P_dis.innerText = Tour_places[index]['Place'][i][1];
Full_dis.innerText = Tour_places[index]['Place'][i][2];
//image part
var img = document.createElement('img');
img.src = Tour_places[index]['Images'][0];
document.getElementById('img-sec').appendChild(img);
img.style.width='35rem';
img.style.height='30rem';
img.style.borderRadius="5px";
// img.style.width='5rem';
function next() {
    i++;
    img.src = Tour_places[0]['Images'][i];
    document.getElementById('img-sec').appendChild(img);
    if (i > Tour_places[index]['Place'].length - 1) {

        // P_name.innerText = Tour_places[0]['Place'][P_length][0];
        // P_dis.innerText = Tour_places[0]['Place'][P_length][1];
        i=Tour_places[index]['Place'].length - 1;
        return;
    }
    P_name.innerText = Tour_places[index]['Place'][i][0];
    P_dis.innerText = Tour_places[index]['Place'][i][1];
    Full_dis.innerText = Tour_places[index]['Place'][i][2];

}
function previous() {
    i--;
    if (i < 0) {
        
        //     P_name.innerText = Tour_places[0]['Place'][0][0];
        //     P_dis.innerText = Tour_places[0]['Place'][0][1];
        //     img.src = Tour_places[0]['Images'][0];
        // document.getElementById('img-sec').appendChild(img);
        i=0;
        return;
    }
    img.src = Tour_places[index]['Images'][i];
    document.getElementById('img-sec').appendChild(img);

    P_name.innerText = Tour_places[index]['Place'][i][0];
    P_dis.innerText = Tour_places[index]['Place'][i][1];
    Full_dis.innerText = Tour_places[index]['Place'][i][2];
}
}
    
}








//sign up-in







