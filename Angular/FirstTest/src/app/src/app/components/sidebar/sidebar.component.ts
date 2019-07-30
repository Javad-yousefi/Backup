import { Component, OnInit } from '@angular/core';

import { MenuServiceService} from '../../services/menu-service.service';

import {MenuItem} from '../../models/menu_item.model';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.scss']
})
export class SidebarComponent implements OnInit {
  sidebarItem:MenuItem[];
  constructor(private menuServiceService:MenuServiceService) {
   this.sidebarItem= menuServiceService.getMenu(3)
   }

  ngOnInit() {
  }

}
