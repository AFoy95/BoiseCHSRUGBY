
(function(global,$){
	
	var calendar = {},
		document=global.document,
		starting_Year=1995,
		ending_Year=2111,
		monthName = {
            full: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            mmm: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
		dayName = {
            full: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            d: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
            dd: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            ddd: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        };
	
	function createMonths(data,option){
		var
			table,tr,td,
			r,c,count;
			table=$("<table>");
			tr=$("<tr>");
			
			for (c = 0; c <= 6; c = c + 1) {
            td = $("<td>");
            td.html("SMTWTFS"[c]);
            tr.append(td);
        }
        table.append(tr);
		 tr = $("<tr>");
		 
		 for (c = 0; c <= 6; c = c + 1) {
            if (c === data.firstDayIndex) {
                break;
            }
            td = $("<td>");
            tr.append(td);
        }
		 count = 1;
        while (c <= 6) {
            td = $("<td>");
            td.html(count);
            if (data.today.date === count && data.today.monthIndex === data.monthIndex && option.highlighttoday === true) {
                td.addClass("dycalendar-today-date");
            }
            if (option.date === count && option.month === data.monthIndex && option.highlighttargetdate === true) {
                td.addClass("dycalendar-target-date");
            }
            tr.append(td);
            count = count + 1;
            c = c + 1;
        }
        table.append(tr);
		 for (r = 3; r <= 7; r = r + 1) {
            tr = $("<tr>");
            for(c = 0; c <= 6; c = c + 1) {
                if (count > data.totaldays) {
                    table.append(tr);
                    return table;
                }
                td = $("<td>");
                td.html(count);
                if (data.today.date === count && data.today.monthIndex === data.monthIndex && option.highlighttoday === true) {
                    td.addClass("dycalendar-today-date");
                }
                if (option.date === count && option.month === data.monthIndex && option.highlighttargetdate === true) {
                    td.addClass("dycalendar-target-date");
                }
                count = count + 1;
                tr.append(td);
            }
            table.append(tr);
        }
	
        return table;
	}
	
});