import React from "react";
import { ScrollView } from "react-native";
import Header from "../components/Header";
import Hero from "../components/Hero";
import AboutMe from "../components/AboutMe";
import Interests from "../components/Interests";
import Skills from "../components/Skills";
import Projects from "../components/Projects";
import Experience from "../components/Experience";
import Contact from "../components/Contact";
import Footer from "../components/Footer";

export default function Home() {
  return (
    <>
      <Header />
      <ScrollView className="flex-1 pt-16">
        <Hero />
        <AboutMe />
        <Interests />
        <Skills />
        <Projects />
        <Experience />
        <Contact />
        <Footer />
      </ScrollView>
    </>
  );
}
