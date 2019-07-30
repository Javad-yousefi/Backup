import { Injectable } from '@angular/core';

import {ArticleItem} from '../models/article_item.model'

@Injectable({
  providedIn: 'root'
})
export class ArticleServiceService {

  constructor() {}
  Result:ArticleItem[];
  // getArticle(times:number):ArticleItem[]{
  //  for(var i=0 ;i<times;i++){
  //   this.Result.push(this.ArticlesItems[i]);
  //  }
  //  return this.Result;
  // }
  getArticle(times:number):ArticleItem[]{
    return this.ArticlesItems.slice(0,times)
  }
   


  ArticlesItems:ArticleItem[]=[
    {
      title:"title ",
      body:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consequuntur exercitationem quas reprehenderit deleniti, assumenda obcaecati, voluptatum dolor, ea iusto corporis. Porro et totam ducimus fugit quod minima eligendi mollitia.',
      avatar:"url avatar1"
    },
    {
      title:"title ",
      body:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consequuntur exercitationem quas reprehenderit deleniti, assumenda obcaecati, voluptatum dolor, ea iusto corporis. Porro et totam ducimus fugit quod minima eligendi mollitia.',
      avatar:"url avatar1"
    },    {
      title:"title ",
      body:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consequuntur exercitationem quas reprehenderit deleniti, assumenda obcaecati, voluptatum dolor, ea iusto corporis. Porro et totam ducimus fugit quod minima eligendi mollitia.',
      avatar:"url avatar1"
    }
  ]

}

