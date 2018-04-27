package com.internousdev.webproj.action;

import com.opensymphony.xwork2.ActionSupport;

public class LoginAction extends ActionSupport{
	private String username;
	private String password;

	public String execute(){
		return SUCCESS;
	}

	public String getUsername(){
		return username;
	}

	public void setUsername(String username){
		this.username = username;
	}

	public String getPasswoed(){
		return password;
	}

	public void getPassword(String password){
		this.password = password;
	}
}


