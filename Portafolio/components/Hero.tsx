import React from "react";
import { View, Text, Pressable } from "react-native";
import { personalInfo } from "../data/portfolio";
import TypingText from "./TypingText";

export default function Hero() {
  const scrollToContact = () => {
    const el = document.getElementById("contact");
    el?.scrollIntoView({ behavior: "smooth" });
  };

  const scrollToProjects = () => {
    const el = document.getElementById("projects");
    el?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <View
      id="hero"
      className="min-h-screen flex items-center justify-center hero-gradient px-6 relative overflow-hidden"
    >
      {/* Floating particles */}
      <View className="float-particle absolute top-[15%] left-[10%] w-4 h-4 bg-slate-400" />
      <View className="float-particle absolute top-[25%] right-[15%] w-6 h-6 bg-slate-300" />
      <View className="float-particle absolute bottom-[30%] left-[20%] w-3 h-3 bg-slate-500" />
      <View className="float-particle absolute top-[60%] right-[25%] w-5 h-5 bg-slate-300" />
      <View className="float-particle absolute bottom-[15%] right-[10%] w-4 h-4 bg-slate-400" />

      {/* Glow orbs */}
      <View className="absolute top-20 right-[10%] w-80 h-80 rounded-full bg-blue-100/20 glow-orb" />
      <View className="absolute bottom-20 left-[5%] w-96 h-96 rounded-full bg-violet-100/15 glow-orb" />

      {/* Grid pattern background */}
      <View className="absolute inset-0 grid-pattern opacity-30" />

      <View className="max-w-3xl items-center z-10">
        {/* Avatar */}
        <View className="avatar-ring w-40 h-40 rounded-full bg-gradient-to-br from-slate-50 to-slate-200 mb-10 items-center justify-center shadow-xl">
          <Text className="text-4xl font-mono font-extrabold text-slate-500">
            {"</>"}
          </Text>
        </View>

        {/* Status badge */}
        <View className="flex-row items-center gap-2 bg-white/80 rounded-full px-5 py-2 mb-6 border border-slate-200/50 shadow-sm">
          {personalInfo.available && (
            <View className="flex-row items-center gap-2 mr-2">
              <View className="status-dot w-2 h-2 rounded-full bg-green-500 z-10" />
              <Text className="text-xs font-semibold text-green-600">
                Disponible
              </Text>
              <Text className="text-slate-300">|</Text>
            </View>
          )}
          <Text className="text-xs font-semibold text-slate-500">
            {personalInfo.location}
          </Text>
        </View>

        <Text className="text-5xl md:text-7xl font-extrabold text-slate-900 text-center mb-4 tracking-tight leading-tight">
          {personalInfo.name}
        </Text>

        {/* Typing effect */}
        <View className="h-10 mb-4 justify-center">
          <TypingText
            texts={personalInfo.typingTexts}
            className="text-xl md:text-2xl font-semibold text-slate-500"
          />
        </View>

        <Text className="text-base md:text-lg text-slate-400 text-center mb-12 max-w-md leading-relaxed font-light">
          {personalInfo.subtitle}
        </Text>

        <View className="flex-row gap-4">
          <Pressable
            onPress={scrollToProjects}
            className="btn-gradient px-10 py-4 rounded-2xl"
          >
            <Text className="text-white font-bold text-sm tracking-wide">
              Ver proyectos
            </Text>
          </Pressable>

          <Pressable
            onPress={scrollToContact}
            className="btn-press border-2 border-slate-200 px-10 py-4 rounded-2xl bg-white/60"
          >
            <Text className="text-slate-700 font-bold text-sm tracking-wide">
              Contacto
            </Text>
          </Pressable>
        </View>

        {/* Scroll indicator */}
        <View className="mt-20 items-center opacity-30">
          <Text className="text-xs text-slate-500 mb-3 tracking-widest uppercase">
            Scroll
          </Text>
          <View className="w-6 h-10 rounded-full border-2 border-slate-400 items-center pt-2">
            <View className="w-1.5 h-3 rounded-full bg-slate-400" />
          </View>
        </View>
      </View>
    </View>
  );
}
