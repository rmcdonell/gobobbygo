import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  name: string;
  select: boolean;
  option1 = 'Select One';
  option2 = 'Select One';
  option3 = 'Select One';
  option4 = 'Select One';
  firstSelection;
  secondSelection;
  thirdSelection;
  fourthSelection;



  scales = [
    {name: 'Select One', select: false},
    {name: '1.) Best Time', select: false},
    {name: '2.) Next Best Time', select: false},
    {name: '3.) Not As Good', select: false},
    {name: '4.) Worst Time', select: false},
  ];

//Finding what was selected

  getSelectOption(x) {
    switch (x) {
      case '1.) Best Time' : {
        this.scales[1].select = false;
        break;
      }
      case '2.) Next Best Time' : {
        this.scales[2].select = false;
        break;
      }
      case '3.) Not As Good' : {
        this.scales[3].select = false;
        break;
      }
      case '4.) Worst Time' : {
        this.scales[4].select = false;
        break;
      }
    }
  }

  //Rember what was selected.

  recurringSelections1(y) {
    switch(y) {
      case '1.) Best Time' : {
        this.getSelectOption(this.firstSelection);
        this.scales[1].select = !this.scales[1].select;
        this.firstSelection = '1.) Best Time';
        break;
      }
      case '2.) Next Best Time' : {
        this.getSelectOption(this.firstSelection);
        this.scales[2].select = !this.scales[2].select;
        this.firstSelection = '2.) Next Best Time';
        break;
      }
      case '3.) Not As Good' : {
        this.getSelectOption(this.firstSelection);
        this.scales[3].select = !this.scales[3].select;
        this.firstSelection = '3.) Not As Good';
        break;
      }
      case '4.) Worst Time' : {
        this.getSelectOption(this.firstSelection);
        this.scales[4].select = !this.scales[4].select;
        this.firstSelection = '4.) Worst Time';
        break;
      }
      default: {
        this.getSelectOption(this.firstSelection);
        break;
      }
    }
  }

  recurringSelections2(y) {
    switch(y) {
      case '1.) Best Time' : {
        this.getSelectOption(this.secondSelection);
        this.scales[1].select = !this.scales[1].select;
        this.secondSelection = '1.) Best Time';
        break;
      }
      case '2.) Next Best Time' : {
        this.getSelectOption(this.secondSelection);
        this.scales[2].select = !this.scales[2].select;
        this.secondSelection = '2.) Next Best Time';
        break;
      }
      case '3.) Not As Good' : {
        this.getSelectOption(this.secondSelection);
        this.scales[3].select = !this.scales[3].select;
        this.secondSelection = '3.) Not As Good';
        break;
      }
      case '4.) Worst Time' : {
        this.getSelectOption(this.secondSelection);
        this.scales[4].select = !this.scales[4].select;
        this.secondSelection = '4.) Worst Time';
        break;
      }
      default: {
        this.getSelectOption(this.secondSelection);
        break;
      }
    }
  }

  recurringSelections3(y) {
    switch(y) {
      case '1.) Best Time' : {
        this.getSelectOption(this.thirdSelection);
        this.scales[1].select = !this.scales[1].select;
        this.thirdSelection = '1.) Best Time';
        break;
      }
      case '2.) Next Best Time' : {
        this.getSelectOption(this.thirdSelection);
        this.scales[2].select = !this.scales[2].select;
        this.thirdSelection = '2.) Next Best Time';
        break;
      }
      case '3.) Not As Good' : {
        this.getSelectOption(this.thirdSelection);
        this.scales[3].select = !this.scales[3].select;
        this.thirdSelection = '3.) Not As Good';
        break;
      }
      case '4.) Worst Time' : {
        this.getSelectOption(this.thirdSelection);
        this.scales[4].select = !this.scales[4].select;
        this.thirdSelection = '4.) Worst Time';
        break;
      }
      default: {
        this.getSelectOption(this.thirdSelection);
        break;
      }
    }
  }

  recurringSelections4(y) {
    switch(y) {
      case '1.) Best Time' : {
        this.getSelectOption(this.fourthSelection);
        this.scales[1].select = !this.scales[1].select;
        this.fourthSelection = '1.) Best Time';
        break;
      }
      case '2.) Next Best Time' : {
        this.getSelectOption(this.fourthSelection);
        this.scales[2].select = !this.scales[2].select;
        this.fourthSelection = '2.) Next Best Time';
        break;
      }
      case '3.) Not As Good' : {
        this.getSelectOption(this.fourthSelection);
        this.scales[3].select = !this.scales[3].select;
        this.fourthSelection = '3.) Not As Good';
        break;
      }
      case '4.) Worst Time' : {
        this.getSelectOption(this.fourthSelection);
        this.scales[4].select = !this.scales[4].select;
        this.fourthSelection = '4.) Worst Time';
        break;
      }
      default: {
        this.getSelectOption(this.fourthSelection);
        break;
      }
    }
  }

  // Reset Page to default
  fixPageByReset(){
    this.option1 = 'Select One';
    this.option2 = 'Select One';
    this.option3 = 'Select One';
    this.option4 = 'Select One';
    this.scales = [
      {name: 'Select One', select: false},
      {name: '1.) Best Time', select: false},
      {name: '2.) Next Best Time', select: false},
      {name: '3.) Not As Good', select: false},
      {name: '4.) Worst Time', select: false},
    ];
  }

}
