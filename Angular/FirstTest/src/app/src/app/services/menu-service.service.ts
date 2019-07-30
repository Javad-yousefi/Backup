import { Injectable } from '@angular/core';

import { MenuItem } from '../models/menu_item.model'

@Injectable({
  providedIn: 'root'
})
export class MenuServiceService {

  constructor() { }
  getMenu(type:number):MenuItem[]{
    let Result: MenuItem[];
    if(type==1){
      Result=this.headerItem;
    }
    else if(type==2){
      Result=this.footerItem;
    }
    else if(type == 3){
      Result=this.sidebarItem;
    }
    else{

    }
    return Result;
  }

  headerItem:MenuItem[]=[
    {
      text:"menu 1",
      url:"url 1"
    },
    {
      text:"menu 2",
      url:"url 2"
    },
    {
      text:"menu 3",
      url:"url 3"
    },
    {
      text:"menu 4",
      url:"url 4"
    },
    {
      text:"menu 5",
      url:"url 5"
    },
    {
      text:"menu 6",
      url:"url 6"
    }
  ]

  sidebarItem:MenuItem[]=[
    {
      text:'sidebar 1',
      url:'url s 1'
    },
    {
      text:'sidebar 2',
      url:'url s 2'
    },
    {
      text:'sidebar 3',
      url:'url s 3'
    },
    {
      text:'sidebar 4',
      url:'url s 4'
    },
    {
      text:'sidebar 5',
      url:'url s 5'
    }
  ]

  footerItem:MenuItem[]=[
    {
      text:'footer 1',
      url:'url f 1'
    },
    {
      text:'footer 2',
      url:'url f 2'
    },
    {
      text:'footer 3',
      url:'url f 3'
    },
    {
      text:'footer 4',
      url:'url f 4'
    }
    
  ]

}
