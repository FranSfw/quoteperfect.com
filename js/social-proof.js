var customerFirst = ['Liam', 'Emma', 'Noah', 'Olivia', 'William', 'Ava', 'James', 'Daniel', 'Sophia', 'Michael',  'Emily',  'Mia', 'Mason', 'Ella',
 'Ethan', 'Avery',  'Sofia', 'Matthew', 'Tracy',   'Patrick' ];

var customerLast = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
  'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
];

var customerStates = [ 'Austin, Texas',  'Orlando, Florida',  'Las Vegas, Nevada', 'Boulder, Colorado', 'Trenton, New Jersey', 'Tampa, Florida', 'Los Angeles, California', 'Denver, Colorado', 'Albany, New York', 'Syracuse, New York', 'Houston, Texas'];

var customerTime = ['23 minutes ago', '40 minutes ago', '15 minutes ago', '20 minutes ago', '26 minutes ago', '33 minutes ago', '50 minutes ago', '23 minutes ago', '11 minutes ago', '22 minutes ago', '23 minutes ago'];

var customerQuantities = ['$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0', '$0'];
var count = 0;

function updateSocial() {
 
  var rCustomerFirst = customerFirst[Math.floor(Math.random() * customerFirst.length)];
  var rCustomerLast = customerLast[Math.floor(Math.random() * customerLast.length)];
  var rStates = customerStates[Math.floor(Math.random() * customerStates.length)];
  var rTime = customerTime[Math.floor(Math.random() * customerTime.length)];
  var rQuantities = customerQuantities[Math.floor(Math.random() * customerQuantities.length)];
  
  $('.avatar').attr('src','/quoteperfect.com/images/'+rCustomerFirst.toLowerCase()+'.jpg');
  $('#notify-customer').html(rCustomerFirst);
  $('#notify-state').html(rStates);
  $('#notify-time').html(rTime);
  
 
  
  if (count > customerQuantities.length){
	  count = 0;
	}
  $('#notify-quantity').html(customerQuantities[count]);

}

setInterval(function() {
  var  divID = $('.custom-social-proof');
  if (divID.is(':hidden')) {
	$('.custom-social-proof').stop().slideToggle('slow');
	updateSocial();
	count++;
	
  } else {
  	$(divID).stop().slideToggle('slow');
  }
}, 6500);
