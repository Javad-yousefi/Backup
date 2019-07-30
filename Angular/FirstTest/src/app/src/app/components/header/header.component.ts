import { Component, OnInit } from '@angular/core';

import { MenuServiceService} from '../../services/menu-service.service';

import {MenuItem} from '../../models/menu_item.model';


@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {
  headerItem:MenuItem[];
  constructor(private menuServiceService:MenuServiceService) { 
    console.log(menuServiceService.getMenu(1));
    this.headerItem=menuServiceService.getMenu(1)
  }

  ngOnInit() {
  }

}
