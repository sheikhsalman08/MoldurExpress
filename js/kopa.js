class Kopa{


	constructor(){
		this.interval = 2000;
		this.images = $(".item");
		this.totalImages = $(".item").length;
		this.activeImage = $(".active");

	}
	previous(){
		var index = this.images.index(this.activeImage);
		$(".active").removeClass("active");
		if(this.totalImages > index && index-1>=0){
			$(this.images[index-1]).addClass("active");
		}else{
			$(this.images[this.totalImages-1]).addClass("active");
		}
		this.images = $(".item");
		this.activeImage = $(".active");
	}

	next(){
		var index = this.images.index(this.activeImage);//
		$(".active").removeClass("active");
		if(this.totalImages > index+1 && index>=0){
			$(this.images[index+1]).addClass("active");
		}else{
			$(this.images[0]).addClass("active");
		}
		this.images = $(".item");
		this.activeImage = $(".active");
	}

	play(){
		var that = this;
		this.autoPlay = setInterval(function(){
			that.next();

		}, this.interval);

	}

	pause(){
			clearInterval(this.autoPlay);
	}
}
