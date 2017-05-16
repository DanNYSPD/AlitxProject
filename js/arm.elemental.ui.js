/*
ARMESIS FRAME ENGINE 1.0
Ing. José Fernando Carreón Díaz de León
www.armesis.com

This framework has based in

1. jquery.blurhouse.min.js
2. jquery.materialripple.js
3. jquery.min.js
4. jquery-ui.js
5. cookie.js

You can use this framework only for no-commercial use

This framework provides a elemental API for work with this HTML tags:

1. input
2. texarea
3. select
*/
const form={
	img:function(v){
		if (v[0] != "") v[0] = 'class="'+v[0]+'"'
		if (v[1] != "") v[1] = 'id="'+v[1]+'"'
		v[3] = (v[3] == undefined) ? '' : 'width="'+v[3]+'"';
		v[4] = (v[4] == undefined) ? '' : 'height="'+v[4]+'"';
		return '<img src="'+v[2]+'" '+v[0]+' '+v[1]+' '+v[3]+' '+v[4]+'>';
	},
	input:function(v){
		more = (v[5] == 'checkbox') ? v[3] : '';
		if (v[0] != "") v[0] = 'class="'+v[0]+'"'
		if (v[1] != "") v[1] = 'id="'+v[1]+'"'
		if (v[2] != "") v[2] = 'placeholder="'+v[2]+'"'
		if (v[3] != "") v[3] = 'value="'+v[3]+'"'
		if (v[4] != "") v[4] = 'checked="'+v[4]+'"';
		if (more == '')
			return '<input '+v[0]+' '+v[1]+' '+v[2]+' '+v[3]+' '+v[4]+' type="'+v[5]+'" '+v[6]+'>';
		else
			return '<label><input '+v[0]+' '+v[1]+' '+v[2]+' '+v[3]+' '+v[4]+' type="'+v[5]+'" '+v[6]+'>'+more+'</label>';
	},
	area:function(v){
		if (v[0] != "") v[0] = 'class="'+v[0]+'"'
		if (v[1] != "") v[1] = 'id="'+v[1]+'"'
		if (v[2] != "") v[2] = 'placeholder="'+v[2]+'"'
		return '<textarea '+v[0]+''+v[1]+''+v[2]+' '+v[3]+'>'+v[4]+'</textarea>';
	},
	select:function(v){
		if (v[1] != "") v[1] = 'id="'+v[1]+'"';
		tmp = '';
		for (i in v[3])
			tmp += '<option value="'+i+'">'+v[3][i]+'</option>';
		return '<select class="'+v[0]+'" '+v[1]+' '+v[2]+'>'+tmp+'</select>';
	},
	asel:function(v){
		tmp = '';
		for (i in v)
			tmp += '<option value="'+i+'">'+v[i]+'</option>';
		return tmp;
	},
	pxs:function(v){
		tmp = '';
		for (i in v)
			tmp += '<option value="'+i+'" key="'+v[i][1]+'">'+v[i][0]+'</option>';
		return tmp;
	},
	button:function(v){
		if (v[0] != "") v[0] = 'class="'+v[0]+'"'
		if (v[1] != "") v[1] = 'id="'+v[1]+'"'
		return '<button '+v[0]+' '+v[1]+' '+v[2]+'>'+v[3]+'</button>';
	}
}
const asyn = {
	post:function(url,data,response,action){
		if (action == undefined)
			asyn.load.open();
		$.post(url,data,response).complete(function(){if (action == undefined) asyn.load.close()}).error(function(){gl.msn("EPro")});
	},
	load:{
		open:function(title){
			if (title == undefined)
				title = 'Cargando Datos...';
			$('body').append('<div class="loading"><div class="l-window">'+title+'</div></div>')
		},
		close:function(){
			$('.loading').remove();
		}
	},
	image :function(but,file,tipo,r,extra){
		extra = (extra == undefined) ? 'uploadImage' : extra;
		var button = $('.'+but);
		new AjaxUpload(button,{
			action: file,
			name: 'image',
			data: {v:extra, b:tipo},
			onSubmit : function(file, ext){},
			onComplete: r
		});
	},
	getColor : function(vl,index){
		var m = new Image();
		m.src = vl;
		var c = new ColorThief();
		return c.getPalette(m)[(index == undefined) ? 0 : index];
	}
}
const gl ={
	arm:function(){
		$('body').append('<div class="logo"><div class="l-logo"><div class="l-l-figure A"></div><div class="l-l-figure B"></div><div class="l-l-figure C"></div><div class="l-l-figure D"></div><div class="l-l-circle"></div></div><div class="l-texto"><div class="l-t-sup"><div class="l-t-s-letter A">A</div><div class="l-t-s-letter A">r</div><div class="l-t-s-letter A">m</div><div class="l-t-s-letter A">e</div><div class="l-t-s-letter B">s</div><div class="l-t-s-letter B">i</div><div class="l-t-s-letter B">s</div><div class="l-t-s-letter B">&nbsp;</div><div class="l-t-s-letter C">S</div><div class="l-t-s-letter C">o</div><div class="l-t-s-letter C">f</div><div class="l-t-s-letter C">t</div><div class="l-t-s-letter D">w</div><div class="l-t-s-letter D">a</div><div class="l-t-s-letter D">r</div><div class="l-t-s-letter D">e</div><div class="l-t-s-letter E">&nbsp;</div><div class="l-t-s-letter E">S</div><div class="l-t-s-letter E">A</div></div> <div class="l-t-ing">Technology and Entertainment</div></div></div>')
	},
	en:function(v){
		return $.blurhouse.encode(gl.repl(v));
	},
	repl:function(v){
		v = v.replace(/®/g, "(R)");
		v = v.replace(/™/g, "(TM)");
		v = v.replace(/©/g, "(C)");
		v = v.replace(/”/g,"'");
		return v
	},
	resolution:function(width,height){
		est = [1920,600]
		if (width == undefined && height == undefined){
			nwx = [$('html').width(),0]
			nwx[1] = (nwx[0] * est[1]) / est[0];
		}
		return nwx;
	},
	rand:function(min,max){
		min = (min == undefined) ? 1: min;
		max = (max == undefined) ? 10: max;
		return Math.floor(Math.random() * max) + min;
	},
	de:function(v){
		return $.blurhouse.decode(v);
	},
	rems:function(v){
		if ($('.sjdbhbjkqw').length == 0)
			$('body').append('<div class="sjdbhbjkqw" style="display:none;"></div>')
		v = $('.sjdbhbjkqw').text(v).text();
		v = v.replace(/"/g, "'");
		return v;
	},
	isFloat:function(n){
		n = parseFloat(n);
		return n === Number(n) && n % 1 !== 0;
	},
	moneda:function(v){
		v = v+"";
		v += (v.indexOf('.') == -1) ? ".00" : "";
		v = v.split('.')
		nw = [];
		l = v[0].length;
		do {
			ps = (l-3 < 0) ? 0 : l-3;
			ce = v[0].slice(ps,l)
			if (l-3 < 0)
				for (a = (l-3)*-1; a>0; a--)
					ce = "0"+ce;
			nw.push(ce);
			l -= 3;
		} while(l-3 >= -2);
		nw.reverse();
		xx = ["un","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez","once","doce","trece","catorce","quince","dieciseís","diecisiete","dieciocho","diecinueve"]
		yy = ["veinti","veinte","treinta","cuarenta","cincuenta","sesenta","setenta","ochenta","noventa"]
		zz = ["ciento","cien","doscientos","trescientos","cuatrocientos","quinientos","seiscientos","setecientos","ochocientos","novecientos"]
		ww = ["pesos","mil","millones","mil millones"]
		z = "";
		for (i = 0; i < nw.length; i++){
			nw[i][0] = (nw[i][0] == "") ? "0" : nw[i][0];
			cases = 0;
			for (e = 0; e < 3; e++)
				nw[i][e] = parseInt(nw[i][e])
			if ((nw[i][0] == 1 && nw[i][1] == 0 && nw[i][2] != 0) || (nw[i][0] == 1 && nw[i][1] != 0))
				z += " "+zz[0]
			else if (nw[i][0] == 1 && nw[i][1] == 0 && nw[i][2] == 0)
				z += " "+zz[1]
			else if (nw[i][0] == 0 && nw[i][1] == 0 && nw[i][2] != 0)
				z += "";
			else if (nw[i][0] != 0)
				z += " "+zz[nw[i][0]];
			if ((nw[i][1] == 1 && nw[i][2] >= 0) && (nw[i][1] == 1 && nw[i][2] <= 9))
				z += " "+xx[parseInt(nw[i][1]+""+nw[i][2])];
			else if ((nw[i][1] == 2 && nw[i][2] == 0))
				z += " "+yy[1]
			else if ((nw[i][1] == 2 && nw[i][2] >= 1) && (nw[i][1] == 2 && nw[i][2] <= 9))
				z += (nw[i][1] == 2 && nw[i][2] == 1) ? " "+yy[0]+xx[0] : " "+yy[0]+xx[nw[i][2]];
			else if (nw[i][1] >= 3 && nw[i][2] == 0)
				z += " "+yy[nw[i][1]-1];
			else if (nw[i][1] >= 3 && nw[i][2] == 1)
				z += " "+yy[nw[i][1]-1]+" y un";
			else if (nw[i][1] == 0 && nw[i][2] != 0)
				z += ((nw[i][0] == 0 && nw[i][1] == 0 && nw[i][2] == 1) && (nw.length == 1)) ? " "+xx[0] : " "+xx[nw[i][2]];
			else if (nw[i][0] >= 0 && nw[i][1] != 0 && nw[i][2] != 0)
				z += " "+yy[nw[i][1]-1]+" y "+xx[nw[i][2]];
			z += ((nw[i][0] == 0 && nw[i][1] == 0 && nw[i][2] == 0) && ((nw.length-1)-i == 1)) ? " de" : " "+ww[(nw.length-1)-i];
		}
		v[1] = (v[1].length == 0) ? "00" : (v[1].length == 1) ? v[1]+"0" : v[1];
		z += " "+v[1]+"/100 M.N."
		return z.slice(1,z.length);
	},
	price:function(v,p){
		t = (v.indexOf('.') != -1) ? true : false;
		if (!t)
			v = v+'.00';
		t = v.split('.')
		if (t[1].length == 1)
			v = v+'0'
		commas = v.split('.')[1];
		precio = v.split('.')[0].split('')
		e = 0;
		t = [];
		for (iKP = precio.length-1; iKP >= 0; iKP--){
			t.push(precio[iKP])
			e++;
			if (e == 3 && precio[iKP-1] != undefined){
				e = 0;
				t.push(',')
			}
		}
		v = '';
		for (iKP = t.length-1; iKP >= 0; iKP--)
			v += t[iKP];
		v = v+'.'+commas
		return (p) ? '$'+v : v;
	},
	getDate:function(v,d){
		ad = new Date();
		t = (d == undefined) ? [ad.getFullYear(),ad.getMonth()+1,ad.getDate(),ad.getHours(),ad.getMinutes(),ad.getSeconds()] : d;
		if (t[1] < 10) t[1] = '0'+t[1];
		if (t[2] < 10) t[2] = '0'+t[2];
		if (d == undefined){
			if (t[3] < 10) t[3] = '0'+t[3];
			if (t[4] < 10) t[4] = '0'+t[4];
			if (t[5] < 10) t[5] = '0'+t[5];
		}
		switch(v){
			case 1:
				return t[0]+'-'+t[1]+'-'+t[2];
			break;
			case 2:
				return t[2]+'-'+t[1]+'-'+t[0];
			break;
			case 3:
				return t[3]+':'+t[4]+':'+t[5]
			break;
			case 4:
				return t[2]+' de '+gl.month(t[1],false)+' de '+t[0];
			break;
			case 5:
				return t[2]+' de '+gl.month(t[1],false)+' de '+t[0]+' a las '+t[3]+':'+t[4]+':'+t[5];
			break;
			case 6:
				return t[2]+' de '+gl.month(t[1],true)+' de '+t[0];
			break;
			case 7:
				return t[2]+' de '+gl.month(t[1],true)+' de '+t[0]+' a las '+t[3]+':'+t[4]+':'+t[5];
			break;
			case 8:
				return t[0]+''+t[1]+''+t[2];
			break;
			default:
				return t;
			break;
		}
	},
	toDate:function(vzx,t){
		d = [vzx.substring(0,4),vzx.substring(4,6),vzx.substring(6,8),vzx.substring(8,10),vzx.substring(10,12),vzx.substring(12,14)]
		d[1] = parseInt(d[1])
		d[2] = parseInt(d[2])
		return gl.getDate(t,d)
	},
	month:function(z,t){
		v = {'01':'Enero','02':'Febrero','03':'Marzo','04':'Abril','05':'Mayo','06':'Junio','07':'Julio','08':'Agosto','09':'Septiembre','10':'Octubre','11':'Noviembre','12':'Diciembre'}
		return (t) ? v[z].substring(0,3) : v[z];
	},
	date:function(v){
		v = v.split('');
		h = [v[0]+v[1]+v[2]+v[3],gl.month(v[4]+v[5],false),v[6]+v[7],v[8]+v[9],v[10]+v[11],v[12]+v[13]]
		return (v.length <= 8) ? h[2]+'-'+h[1]+'-'+h[0] : (v.length <= 12) ? h[2]+'-'+h[1]+'-'+h[0]+' '+h[3]+':'+h[4]:h[2]+'-'+h[1]+'-'+h[0]+' '+h[3]+':'+h[4]+':'+h[5];
	},
	toDateNumber:function(v){
		return v.replace(/-/g, "");
	},
	json:function(v,data,x){
		if (v){
			data = JSON.stringify(data) //encode
			return (x) ? gl.en(data) : data;
		} else {
			data = (x) ? gl.de(data) : data;
			return JSON.parse(data); //decode
		}
	},
	correo:function(v){
		var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    	return regex.test(v.trim())
	},
	msn:function(r){
		switch(r){
			case 'EPro':
				popup.open('Error','Hubo un error al realizar la operación solicitada, intente nuevamente','red');
			break;
			default:
				popup.open('Información: ',r,'blue');
			break;
		}
	}
}
const popup={
	open:function(titulo,content,color,yes,no){
		if ($('.popup').length == 0){
			$('body').append('<div class="popup"><div class="p-window"><div class="p-w-header '+color+'"><div class="p-w-h-title">'+titulo+'</div><div class="p-w-h-close">x</div></div><div class="p-w-text '+color+'">'+content+'</div><div class="p-w-metadata"></div></div></div>');
			if (yes == undefined && no == undefined)
				box = {'Aceptar':function(){popup.close();}};
			else if (no == undefined)
				box = {'Aceptar':function(){yes();popup.close();}};
			else
				box = {'Aceptar':function(){yes();popup.close();},'Cancelar':function(){no();popup.close();}};
			for (i in box){
				$('.p-w-metadata').append('<div class="p-w-m-left">'+form.button(['popu '+i+' '+color,'','',i])+'</div>')
				$('.popu.'+i).die("click").live("click",box[i])
			}
			$('.p-window').show();
		}
	},
	close:function(){
		$('.popup').remove();
	}
};
$('.popup').live("click",function(){
	xPz = $('.p-window')
	if (!xPz.hasClass('active'))
		xPz.addClass('active')
	setTimeout(function(){xPz.removeClass('active')},600);
});
$('.p-w-h-close').live("click",function(){
	popup.close();
});
$('.w-w-h-close').live("click",function(){
	$('.Window#'+$(this).attr('id')).remove();
	$('.qwqwhunqw').remove();
});
const w = {
	open:function(v){
		/*
		v[0] = width
		v[1] = height
		v[2] = title
		v[3] = fondo visible
		v[4] = contenido
		*/
		xt = parseInt(1000 * Math.random());
		v[1] += 50;
		mt = v[1]/2;
		ml = v[0]/2;
		v[3] = (v[3] == undefined) ? '' : 'style="background-color:transparent"';
		$('body').append('<div class="Window" id="cx'+xt+'" '+v[3]+'><div class="w-window" id="wi'+xt+'" style="width:'+v[0]+'px;height:'+v[1]+'px;margin-top:-'+mt+'px;margin-left:-'+ml+'px;"><div class="w-w-header"><div class="w-w-h-title">'+v[2]+'</div><div class="w-w-h-close" id="cx'+xt+'">x</div></div><div class="w-w-content" id="co'+xt+'" style="height:'+(v[1]-50)+'px;">'+v[4]+'</div></div></div>');
		return xt;
	}
}
const wtx = {
	open:function(v){
	/*
	v[0] = color
	v[1] = texto
	v[2] = timeDelay
	*/
	$('body').append('<div class="temporalMsn '+v[0]+'">'+v[1]+'</div>')
	$('.temporalMsn').show();
	setTimeout(function(){
		$('.temporalMsn').remove();
	},(v[2] == undefined) ? 6000 : v[2])
	},
}
$('.temporalMsn').live("click",function(){
	$(this).remove();
});