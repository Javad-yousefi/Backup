import { Component, OnInit } from '@angular/core';

import {MenuItem} from '../../models/menu_item.model';

import { MenuServiceService} from '../../services/menu-service.service';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.scss']
})
export class FooterComponent implements OnInit {
  footerItem:MenuItem[];
  constructor(private menuServiceService:MenuServiceService) {
    this.footerItem=menuServiceService.getMenu(2)
   }

  ngOnInit() {
  }

}
