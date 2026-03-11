import React from "react";
import { View, Text, Pressable, Linking } from "react-native";
import { personalInfo } from "../data/portfolio";

const footerLinks = [
  { label: "GitHub", url: personalInfo.github },
  { label: "LinkedIn", url: personalInfo.linkedin },
  { label: "Email", url: `mailto:${personalInfo.email}` },
];

export default function Footer() {
  return (
    <View className="bg-slate-900 py-16 px-6 relative overflow-hidden">
      {/* Decorative */}
      <View className="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-slate-700 to-transparent" />

      <View className="max-w-4xl mx-auto items-center">
        {/* Logo */}
        <View className="w-12 h-12 rounded-2xl bg-white/10 items-center justify-center mb-6 border border-white/5">
          <Text className="text-white font-extrabold text-base">P</Text>
        </View>

        <Text className="text-lg font-bold text-white mb-2">
          {personalInfo.name}
        </Text>
        <Text className="text-sm text-slate-500 mb-8">
          {personalInfo.title}
        </Text>

        <View className="flex-row gap-6 mb-10">
          {footerLinks.map((link) => (
            <Pressable
              key={link.label}
              onPress={() => Linking.openURL(link.url)}
              className="footer-link bg-white/5 px-5 py-2.5 rounded-xl border border-white/5"
            >
              <Text className="text-sm text-slate-400 font-semibold">
                {link.label}
              </Text>
            </Pressable>
          ))}
        </View>

        <View className="h-px bg-slate-800 w-full mb-8" />

        <Text className="text-xs text-slate-600">
          {new Date().getFullYear()} {personalInfo.name} - Hecho con Expo +
          NativeWind
        </Text>
      </View>
    </View>
  );
}
