	function api(){
	$.ajax({
	method: 'GET',
	url: 'http://localhost:8000/api/dados'
}).then(function(response){
       let data = response
      console.log(response)
      return response
})
}
api()