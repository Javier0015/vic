module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{js,jpg,html,php,json,css,mp3}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};