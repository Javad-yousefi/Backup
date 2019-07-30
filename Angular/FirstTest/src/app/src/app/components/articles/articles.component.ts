import { Component, OnInit } from '@angular/core';
import {ArticleItem} from '../../models/article_item.model';

import { ArticleServiceService } from '../../services/article-service.service';
import { from } from 'rxjs';

@Component({
  selector: 'app-articles',
  templateUrl: './articles.component.html',
  styleUrls: ['./articles.component.scss']
})
export class ArticlesComponent implements OnInit {
  articleItem:ArticleItem[];
  // constructor( private articleServiceService:ArticleServiceService) { 
  // this.articleItem=articleServiceService.getArticle(3)
   
  // }
  constructor(private articleServiceService:ArticleServiceService) { }

  ngOnInit(){
    this.getArticles();
  }
  getArticles(){
    this.articleItem=this.articleServiceService.getArticle(3)
  }
}
