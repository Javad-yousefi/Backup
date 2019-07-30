import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-article',
  templateUrl: './article.component.html',
  styleUrls: ['./article.component.scss']
})
export class ArticleComponent implements OnInit {
  article_title:string="javad";

  constructor() { }
    
  ngOnInit() {
    this.article_title;

  }
  reset_text(){
    this.article_title='javad';
  }

  addHero(name){
    let hero:Hero={
      name:name,
      id:(this.HEROES[])
    }
  }


}
