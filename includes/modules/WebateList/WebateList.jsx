// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class WebateList extends Component {

  static slug = 'weli_webate';

  render() {
    return (
      <Fragment>
        <h1 className="weli-webate-heading">{this.props.heading}</h1>
        <p>
          {this.props.content()}
        </p>
      </Fragment>
    );
  }
}

export default WebateList;

