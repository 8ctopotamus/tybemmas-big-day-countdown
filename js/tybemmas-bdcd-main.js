var end = new Date('07/8/2017 11:00 AM');
var now = new Date(new Date().getTime())
var difference = end.getDate() - now.getDate()

simplyCountdown('#tybemmas-big-day-countdown', {
	year: end.getFullYear(),
	month: end.getMonth(),
	day: now.getDate()
})
