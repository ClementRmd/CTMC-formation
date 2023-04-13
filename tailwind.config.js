const pathTheme = './resources/themes/rmd-theme';

module.exports = {
	mode: 'jit',
	content: [
		`${pathTheme}/page-templates/**/*.php`,
		`${pathTheme}/templates/**/*.php`,
		`${pathTheme}/*.php`,
		`${pathTheme}/inc/**/*.php`,
		`${pathTheme}/inc/*.php`,
		`${pathTheme}/**/*.{js,php,css,scss}`,
	],
	theme: {
		colors: {
			primarycolor: '#0198cf',
			secondarycolor: '#5b6871',
			thirdcolor: '#e3a715',
			white: '#ffffff',
			black: '#000000',
			gray: {
				normal: '#484F52',
				dark: '#333330',
				medium: '#6B7280',
				light: '#f7f7f7',
			},
			blue: {
				medium: '#34657C',
				light: '#4CB5F5',
			},
			green: '#B3C100',
			red: {
				medium: '#b91c1c',
				light: '#fee2e2',
			}
		},
		fontSize: {
			'base': ['16px', '24px'],
			'3xl': ['25px', '25px'],
			'4xl': ['36px', '40px'],
			'5xl': ['48px', '48px'],
			'6xl': ['64px', '64px'],
		},
		fontFamily: {
			primary: ['Oleo Script Swash Caps', 'sans-serif'],
			secondary: ['Roboto', 'sans-serif']
		},
		keyframes: {
			slide: {
				'0%': { paddingLeft: '24px' },
				'100%': { paddingLeft: '300px' },
			}
		},
		animation: {
			slide: 'slide 3s linear infinite',
		}
	
	},
	variants: {
		extend: {},
	},
	plugins: [
		require('@tailwindcss/forms'),
	],
};
