import { Component, OnInit  } from '@angular/core';
import {hero_modle} from ''

@Component({
  selector: 'app-hero-list',
  templateUrl: './hero-list.component.html',
  styleUrls: ['./hero-list.component.scss']
})
export class HeroListComponent implements OnInit {
  @Input() heroes:

  constructor() { }

  ngOnInit() {
  }

}
