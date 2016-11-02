import { Component } from '@angular/core';

import { NavController, NavParams } from 'ionic-angular';

import { ItemDetailsPage } from '../item-details/item-details';


@Component({
  templateUrl: 'repair.html'
})
export class RepairPage {
  selectedItem: any;
  icons: string[];
  options: string[];
  items: Array<{title: string, note: string, icon: string}>;
  

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    // If we navigated to this page, we will have an item available as a nav param
    this.selectedItem = navParams.get('item');

    this.icons = ['flask', 'wifi', 'beer', 'football', 'basketball', 'paper-plane',
    'american-football', 'boat', 'bluetooth', 'build'];
    
    this.options = ['MECHANICAL PROBLEMS', 'ELECTRICAL PROBLEMS', 'ENGINE REPAIRS', 'COOLING SYSTEM REPAIRS', 'BRAKE REPAIRS'];

    this.items = [];
    for(let i = 0; i < this.options.length; i++) {
      this.items.push({
        title: this.options[i],
        note: 'This is item #' + i,
        icon: this.icons[Math.floor(Math.random() * this.icons.length)]
      });
    }
  }

  itemTapped(event, item) {
    this.navCtrl.push(ItemDetailsPage, {
      item: item
    });
  }
}
