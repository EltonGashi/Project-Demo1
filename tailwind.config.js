
module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'./components/home/many_solutions/**/*.php',
			'./components/home/card_users/**/*.php',
			'./components/home/categories/**/*.php',
			'./components/home/NeedSomethingDone/**/*.php',
			'./components/home/**/*.php',
			'./components/find-talents/Developers/**/*.php',
			'./components/pages/**/*.php',
			'./components/FindTalents/Developers/**/*.php',
			'./components/**/*.php',
			'./**.php',
			'./pages/**.php',
			'./components1/home/assets/**/*.js',
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
			  fontFamily:{
				'courgette':['Courgette', 'cursive'],
			},
			dropShadow:{
				'2lg':'0 10px 8px rgb(0 0 0 / 0.22)',
			},
		},
	},
	variants: {},
	plugins: [],
}
