let jsonData = [

 {
    "author": "Catherine Woodard",
    "title": "Opening the Mouth of the Dead Limited Edition","artist": "Margot Voorhies Thompson",
    "price": "$1,650"
  },
{
    "author": "Catherine Woodard",
    "title": "Opening the Mouth of the Dead Paperback Edition", "artist": "Margot Voorhies Thompson",
    "price": "$17.95"
  }
];

 //Function to add unique ID to JSON string
function addUniqueId(jsonData) {
  let index = 0;
  for (let key in jsonData) {
    jsonData[key].id = index++;
 }
 return jsonData;
}
const resultObject = addUniqueId(jsonData);


localStorage.setItem("Bookswid", JSON.stringify(resultObject))

console.log(jsonData[1]);
console.log(jsonData[0]["title"]);
console.log(jsonData[1]["price"]);
json.parse(resultObject);
console.log(resultObject);