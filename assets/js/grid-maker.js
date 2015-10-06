
photos = []
imageElements = [];
for(var i=0; i<images.length; i++){
	imageElements[i] = new Image();
	imageElements[i].setAttribute("class", "image"+i);
	imageElements[i].onload = function(){
		photos.push({src: this.src, ar: this.width / this.height})
		// console.log({src: this.src, ar: this.width / this.height});
	}
	imageElements[i].src = images[i];
}

function floodDOM(){
	document.getElementById('gallery').innerHTML = "";
	viewport_width = document.getElementById('gallery').clientWidth;
	ideal_height = parseInt(window.innerHeight / 2);
	summed_width = photos.reduce((function(sum, p) {
	  return sum += p.ar * ideal_height;
	}), 0);
	rows = Math.round(summed_width / viewport_width);

	weights = photos.map(function(p) {
    	return parseInt(p.ar * 100);
	});	

	partition = part(weights, rows);

	index = 0;
	x = photos.slice(0);
	row_buffer = [];
  
  	for (var i = 0; i < partition.length; i++) {
	  	// console.log(partition[i])
	  	var summed_ratios;
	  	row_buffer = [];
	  	for (var j = 0; j<partition[i].length; j++) {
	  		row_buffer.push(photos[index++])
	  	};
	  	summed_ratios = row_buffer.reduce((function(sum, p) {
	      return sum += p.ar;
	    }), 0);
	    for (var k = 0; k<row_buffer.length; k++) {
	    	// console.log(row_buffer[k])
	    	photo = row_buffer[k]
	    	elem = document.createElement("div");
	    	elem.style.backgroundImage="url('"+x.shift().src+"')";
	    	elem.style.width = parseInt(viewport_width / summed_ratios * photo.ar)+"px";
	    	elem.style.height = parseInt(viewport_width / summed_ratios)+"px";
	    	elem.setAttribute("class", "photo");
	    	// console.log(elem, parseInt(viewport_width / summed_ratios * photo.ar) / parseInt(viewport_width / summed_ratios));
	    	document.getElementById('gallery').appendChild(elem)
		  };
	}
	console.log({'viewport_width': viewport_width, 'ideal_height': ideal_height, 'summed_width': summed_width, 'rows': rows, 'weights': weights, 'partition': partition, "row_buffer": row_buffer})
}
window.onload = function(){floodDOM();}
window.onresize = function(){floodDOM();}