import { Component, OnInit } from '@angular/core';
import { sanitizeIdentifier } from '@angular/compiler';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.scss']
})
export class SidebarComponent implements OnInit {

  constructor() { }
  sidebar_title:string;
  ngOnInit() {
    this.sidebar_title="side bar is : "
  }

}
