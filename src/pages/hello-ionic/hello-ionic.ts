import { Component } from '@angular/core';
import { Slides } from 'ionic-angular';


@Component({
  templateUrl: 'hello-ionic.html'
})
export class HelloIonicPage {

	mySlideOptions = {
	  		autoplay: 1000,
			initialSlide: 0,
			speed: 3000,
			loop: true
	  };
  constructor() {

  }
}
