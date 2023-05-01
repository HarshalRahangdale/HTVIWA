$(document).ready(function() {
  // Define a JavaScript object with Indian states and their cities
   var statesAndCities = {
  "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Kurnool", "Rajahmundry", "Kadapa", "Kakinada", "Tirupati", "Anantapur"],
  "Arunachal Pradesh": ["Itanagar", "Tawang", "Naharlagun", "Bomdila", "Pasighat", "Ziro", "Along"],
  "Assam" : ["Guwahati", "Jorhat", "Dibrugarh", "Silchar", "Tezpur", "Nagaon", "Lakhimpur", "Karimganj", "Sivasagar", "Goalpara"],
  "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Darbhanga", "Purnia", "Arrah", "Begusarai", "Katihar", "Munger"],
  "Chhattisgarh" : ["Raipur", "Bhilai", "Bilaspur", "Korba", "Durg", "Raigarh", "Rajnandgaon", "Jagdalpur", "Ambikapur", "Chirmiri"],
  "Goa" : ["Panaji", "Margao", "Vasco da Gama", "Mapusa", "Ponda", "Mormugao", "Curchorem", "Sanquelim", "Bicholim", "Valpoi"],
  "Gujarat" : ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar", "Junagadh", "Gandhinagar", "Anand", "Bharuch"],
  "Haryana" : ["Faridabad", "Gurugram", "Panipat", "Ambala", "Yamunanagar", "Rohtak", "Hisar", "Karnal", "Sonipat", "Panchkula"],
  "Himachal Pradesh": ["Shimla", "Solan", "Dharamshala", "Mandi", "Hamirpur", "Kangra", "Una", "Chamba", "Bilaspur", "Kullu"],
  "Jharkhand" : ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro Steel City", "Deoghar", "Hazaribagh", "Giridih", "Ramgarh", "Medininagar", "Dumka"],
  "Karnataka" : ["Bengaluru", "Mysuru", "Hubballi-Dharwad", "Mangaluru", "Belagavi", "Kalaburagi", "Davangere", "Ballari", "Vijayapura", "Udupi"],
  "Kerala" : ["Thiruvananthapuram", "Kochi", "Kozhikode", "Thrissur", "Alappuzha", "Kollam", "Kannur", "Pathanamthitta", "Kottayam", "Kasaragod"],
  "Madhya Pradesh": ["Bhopal", "Indore", "Jabalpur", "Gwalior", "Ujjain"],
  "Maharashtra" : ["Mumbai", "Pune", "Nagpur", "Thane", "Nashik", "Aurangabad", "Solapur", "Amravati", "Kolhapur", "Latur"],
  "Manipur" : ["Imphal", "Bishnupur", "Thoubal", "Churachandpur", "Senapati", "Tamenglong", "Ukhrul"],
  "Meghalaya" : ["Shillong", "Tura", "Nongstoin", "Jowai", "Williamnagar", "Baghmara", "Resubelpara"],
  "Mizoram" : ["Aizawl", "Lunglei", "Saiha", "Champhai", "Serchhip", "Kolasib", "Mamit"],
  "Nagaland" : ["Kohima", "Dimapur", "Mokokchung", "Tuensang", "Wokha", "Zunheboto", "Phek"],
  "Odisha" : ["Bhubaneswar", "Cuttack", "Rourkela", "Brahmapur", "Sambalpur", "Puri", "Balasore", "Bhadrak", "Baripada", "Jharsuguda"],
  "Punjab" : ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda", "Hoshiarpur", "Pathankot", "Mohali", "Moga", "Firozpur"],
  "Rajasthan" : ["Jaipur", "Jodhpur", "Udaipur", "Kota", "Bikaner", "Ajmer", "Alwar", "Sikar", "Bhilwara", "Jaisalmer"],
  "Sikkim" : ["Gangtok", "Namchi", "Gyalshing", "Mangan", "Ravangla", "Singtam", "Nayabazar"],
  "Tamil Nadu" : ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Tiruppur", "Salem", "Erode", "Vellore", "Thoothukudi", "Dindigul"],
  "Telangana" : ["Hyderabad", "Warangal", "Karimnagar", "Nizamabad", "Khammam", "Ramagundam", "Mahabubnagar", "Adilabad", "Suryapet", "Jagtial"],
  "Tripura" : ["Agartala", "Udaipur", "Dharmanagar", "Kailashahar", "Belonia", "Ambassa", "Khowai"],
  "Uttar Pradesh" : ["Lucknow", "Kanpur", "Agra", "Varanasi", "Prayagraj", "Meerut", "Ghaziabad", "Noida", "Aligarh", "Moradabad"],
  "Uttarakhand" : ["Dehradun", "Haridwar", "Roorkee", "Haldwani", "Nainital", "Rudrapur", "Kashipur", "Rishikesh", "Pithoragarh", "Chamoli"],
  "West Bengal" : ["Kolkata", "Asansol", "Sil"]
};

  // When a state is selected, update the city select box with the cities of the selected state
  $('#state').change(function() {
    var state = $(this).val();
    if (state == '') {
      // If no state is selected, disable the city select box and show the default option
      $('#city').prop('disabled', true);
      $('#city').html('<option value="">--Select City--</option>');
    } else {
      // If a state is selected, enable the city select box and show the cities of the selected state
      $('#city').prop('disabled', false);
      var cities = statesAndCities[state];
      var options = '<option value="">--Select City--</option>';
      for (var i = 0; i < cities.length; i++) {
        options += '<option value="' + cities[i] + '">' + cities[i] + '</option>';
      }
      $('#city').html(options);
    }
  });
});
