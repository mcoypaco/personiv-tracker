admin
	.controller('dashboardContentContainerController', ['MaterialDesign','toolbarService', 'Task', function(MaterialDesign, toolbarService, Task){
		var vm = this;

		vm.toolbar = toolbarService;
		vm.task = Task;

		vm.toolbar.parentState = 'Test';

		vm.config = {
			title: {
		        text: 'DexMedia',
		    },

	        subtitle: {
	        	text: 'April 6, 2017', 
	        },

		    xAxis: {
		    	type: 'datetime',
		    },

		    yAxis: {
		        title: {
		            text: 'Number of Compeleted Tasks',
		        },
		    },

		    series: [{
		    	name: 'VAR',
		        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 29.9, 71.5, 106.4, 129.2, 129.2],
		        pointStart: Date.UTC(2010, 3, 6),
		        pointInterval: 1000 * 60 * 60, // 1hour = 1000 ms * 60 sec * 60 mins
		    },
		    {
		    	name: 'SSG',
		        data: [129.2, 106.4, 71.5, 29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 29.9, 129.2],
		        pointStart: Date.UTC(2010, 3, 6),
		        pointInterval: 1000 * 60 * 60, // 1hour = 1000 ms * 60 sec * 60 mins
		    }],

			navigation: {
		        buttonOptions: {
		            enabled: true
		        }
		    }		    
		}
		vm.config2 = {
			title: {
		        text: 'VAR',
		    },

	        subtitle: {
	        	text: 'April 6, 2017', 
	        },

		    xAxis: {
		    	type: 'datetime',
		    },

		    yAxis: {
		        title: {
		            text: 'Number of Compeleted Tasks',
		        },
		    },

		    series: [{
		    	name: 'John Doe',
		        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 29.9, 71.5, 106.4, 129.2, 129.2],
		        pointStart: Date.UTC(2010, 3, 6),
		        pointInterval: 1000 * 60 * 60, // 1hour = 1000 ms * 60 sec * 60 mins
		    },
		    {
		    	name: 'Jane Doe',
		        data: [144.0, 176.0, 216.4, 71.5, 106.4, 129.2, 29.9, 135.6, 148.5, 54.4, 194.1, 95.6, 54.4,  148.5, 176.0, 135.6, 216.4, 194.1, 144.0, 95.6,  29.9, 71.5, 106.4, 129.2, 129.2],
		        pointStart: Date.UTC(2010, 3, 6),
		        pointInterval: 1000 * 60 * 60, // 1hour = 1000 ms * 60 sec * 60 mins
		    }],

			navigation: {
		        buttonOptions: {
		            enabled: true
		        }
		    }		    
		}
	}]);