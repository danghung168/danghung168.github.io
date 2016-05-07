var  infor = ['STT','Anh','Ten','Sex','Email','SDT'];
var row_info = "<tr>";
// Tạo vòng lặp đưa dữ liệu vào;

for( var i = 0; i < infor.length; i++){
	var str2 = "<th>"+infor[i]+ "</th>";
	row_info = row_info.concat(str2);
};
row_info = row_info + "</tr>";
$('thead').append(row_info);


// Tạo vòng lặp đưa dữ liệu vào;

var arr = [
{
	STT : '1', 
	Anh : 'images/img2.jpg',
	Ten:'Dragon',
	Sex: 'Male',
	Email:'hung@gmail.com',
	SDT:'12345'},
{
	STT:'2',
	Anh:'images/img3.jpg',
	Ten:'Hung',
	Sex:'Male',
	Email:'Hung@gmail.com',
	SDT:'0132659535'},
{
	STT:'3',
	Anh:'images/img4.jpg',
	Ten:'Ha',
	Sex:'Male',
	Email:'Ha@gmail.com',
	SDT:'0326253635'},
{
	STT:'4',
	Anh:'images/img5.jpg',
	Ten:'Dan',
	Sex:'Female',
	Email:'Dan@gmail.com',
	SDT:'093236135'},
{
	STT:'5',
	Anh:'images/img1.jpg',
	Ten:'Tien',
	Sex:'Female',
	Email:'Ten@gmail.com',
	SDT:'01236978683'}
	];
for(var i = 0;i<arr.length;i++){
	var	row = arr[i]; // Lấy phần tử của mảng ra
	var nghia = "<tr>"; 
	var str_stt = "<td>"+arr[i].STT+"</td>"; //lấy ra phần tử STT trong arr thứ i và nhét vào trong 1 cột
	var str_anh = "<td><img src='"+arr[i].Anh+"'></td>"; //lấy và gán ảnh trong arr thứ i nhét vào 1 cột
	var str_ten = "<td>"+arr[i].Ten+"</td>";
	var str_sex = "<td>"+arr[i].Sex+"</td>";
	var str_email = "<td>"+arr[i].Email+"</td>";
	var str_sdt = "<td>"+arr[i].SDT+"</td>";
	nghia = nghia+str_stt+str_anh+ str_ten+str_sex+str_email+str_sdt +"</tr>"; // cho tất cả các cột vào trong 1 row
	$('tbody').append(nghia); // tbody nhét các cột td vào
};
$(document).ready(function(){
	$('tr:Odd').addClass('colorTd');
});

$(document).ready(function(){
	$('#table').tablesorter( {sortList:[[0,0], [1,0]]} );
});

//$('.headerSortUp').append("<i> abc </i>");

