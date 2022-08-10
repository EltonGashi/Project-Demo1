
module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'./components/many_solutions/**/*.php',
			'./components/services-card-users/**/*.php',
			'./components/**/*.php',
			'./*.php',
			'./**.php',
			'./components/service-card-users/**/*.js',
		],
	},
	darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
	theme: {
		extend: {
			colors:{
				'customGreen': '#799F28',
				'bg': '#F0F0F0'
			  },
			  screens:{
				sm: '480px',
				md: '768px',
				lg: '976px',
				xl: '1440px'
			  },
			  
		},
	},
	variants: {},
	plugins: [],
}