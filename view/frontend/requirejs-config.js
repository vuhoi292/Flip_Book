var config = {
	map: {
		'*': {
			'html2canvas': 'Book_Flip/js/plugin/html2canvas.min',
			'three':'Book_Flip/js/plugin/three.min',
			'pdf': 'Book_Flip/js/plugin/pdf.min',
			'flipbook': 'Book_Flip/js/plugin/3dflipbook.min'
		},
	},
	paths: {
		'magepow/three'		: 'Book_Flip/js/plugin/three.min',
	},
	shim: {
		'html2canvas': {
			deps: ['jquery']
		},
		'three': {
			deps: ['jquery','flipbook']
		},
		'pdf': {
			deps: ['jquery','flipbook', 'three']
		},
		'flipbook': {
			deps: ['jquery','html2canvas', 'three','pdf']
		},
	}
};
