$(document).ready(function()
{
	$('button.click').on('click', function()
	{
		console.log('test');
		// var ajaxParams = {};
		// ajaxParams['page'] = pageNum;

		// Call callAjax function to get response
		// var response = callAjax(method, 'get', 'html', ajaxParams);
	});
});


/**
 * This function will execute ajax call with given params and will return response
 * 
 * @param  {string} url 	- ajax call url
 * @param  {string} method 	- which method will be used for a call
 * @param  {string} dType 	- type of a ajax call
 * @param  {array} params 	- params which will be passed to ajax call
 * @return {string} 		- return ajax call respone
 */
var callAjax = function(url = '', method = 'post', dType = 'html', params = {})
{
	// Define function response
	var response = '';

	if (url != '') {
		// Call ajax with given params
		$.ajax({
			url: url,
			method: method,
			dataType: dType,
			async: false,
			data: params,
			success: function(result) 
			{
				response = result;
			}
		});
	}

	// Return data
	return response;
}