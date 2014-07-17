var currentUser;

	// Rig up stuff on document ready
	$(document).ready(function() {
		// Rig up the search input filter
	  $( ".search-input" ).keyup(function() {
	  	filter($(this), '.event-list');		  
		});
	});

	// Initiate the Parse app
	initiateParseApp();

	// Filter the list of events based on search input
	function filter(element,list) {
    var value = $(element).val();
    value = value.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    if(value == '')
        $(list + ' > li').show();
    else {
        $(list + ' > li:not(:contains(' + value + '))').hide();
        $(list + ' > li:contains(' + value + ')').show();
    }
	};

	// Initialize the Event app with Parse
	function initiateParseApp() {
		Parse.initialize("HEyNLVqopGx7i1G4NiXRa7g9szhF3PQvo05uU09Y", "iFKbzxbognGSY8weTN1GFm3Jlll1YdLAeSqxyUUC");
		setupFutureEventsList();
		setupPastEventsList();
	}

	function setupFutureEventsList(){
		// Create the Parse object we're looking for (an Event)
		var parkourEvent = Parse.Object.extend("jam");
		var query = new Parse.Query(parkourEvent);

		// Create the query to find all future Events
		var d = new Date();
		var todaysDate = new Date(d.getTime()); 
		query.greaterThanOrEqualTo( "start_date", todaysDate );

		// Execute the query, and act on results
		query.find({
		  success: function(results) {
		  	createEventsWithList(results, '.current-events');
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
	}

	function setupPastEventsList(){
		// Create the Parse object we're looking for (an Event)
		var parkourEvent = Parse.Object.extend("jam");
		var query = new Parse.Query(parkourEvent);

		// Create the query to find all future Events
		var d = new Date();
		var todaysDate = new Date(d.getTime()); 
		query.descending("start_date").lessThanOrEqualTo( "start_date", todaysDate );

		// Execute the query, and act on results
		query.find({
		  success: function(results) {
		  	createEventsWithList(results, '.past-events');
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
	}

	function createEventsWithList(events, listToAppend) {
		// alert("Successfully retrieved " + eventsList.length + " events.");
    // Add the retrieved Events to the Future Events list
    for (var i = 0; i < events.length; i++) { 
      var parkourEvent = events[i];
      addEventToList(parkourEvent, listToAppend);
    }

    // Now that the list is populated, make it visible and animate.
    $(listToAppend).addClass('animated fadeInUp').css('visibility', 'visible');

    // Now that lists are visible, animate-in the search form
    $('#event-search-form').addClass('animated fadeInUp delayed-animation').css('visibility', 'visible');
	}

	function addEventToList(parkourEvent, listToAppend){
		$(listToAppend).append('<li class="event" id="'+ parkourEvent.id + '"></li>');
  	var eventListItem = '#' + parkourEvent.id;

		// Create the Event title + URL (if has one)
    if (parkourEvent.get('url')) {
    	$(eventListItem).append('<h3 class="event-name"></h3>');
    	$(eventListItem + ' > h3').append('<a href="'+ parkourEvent.get('url') 
    		+ '" target="_blank" class="event-url">' + parkourEvent.get('name') + '</a>');
    } else {
    	$(eventListItem).append('<h3 class="event-name">' + parkourEvent.get('name') + '</h3>');	
    }

    // Next, create the date/location
    var start_date = new Date(parkourEvent.get('start_date'));
    $(eventListItem).append('<div class="event-details"></div>');
    $(eventListItem + ' .event-details').append('<span class="event-dates">' +
    	moment(start_date).format("dddd, MMMM Do YYYY") + 
    	'</span> &middot; <span class="event-location">' + 
    	parkourEvent.get('location') + '</span>');

    // And finally, add a description if it has one
     if (parkourEvent.get('description')) {
     	$(eventListItem).append('<p class="event-description">'+ parkourEvent.get('description') +'</p>');
     }
	}