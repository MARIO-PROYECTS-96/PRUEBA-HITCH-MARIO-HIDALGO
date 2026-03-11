import React, { useState } from "react";
import { View, Text, Pressable } from "react-native";
import { navLinks } from "../data/portfolio";

export default function Header() {
  const [menuOpen, setMenuOpen] = useState(false);

  const scrollTo = (id: string) => {
    setMenuOpen(false);
    const el = document.getElementById(id);
    el?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <View className="fixed top-0 left-0 right-0 z-50 glass-header border-b border-gray-200/50">
      <View className="max-w-6xl mx-auto w-full flex-row items-center justify-between px-8 py-4">
        <Pressable onPress={() => scrollTo("hero")}>
          <View className="flex-row items-center gap-2">
            <View className="w-8 h-8 rounded-lg bg-slate-900 items-center justify-center">
              <Text className="text-white font-bold text-sm">P</Text>
            </View>
            <Text className="text-lg font-bold text-slate-800 tracking-tight">
              Portafolio
            </Text>
          </View>
        </Pressable>

        {/* Desktop nav */}
        <View className="hidden md:flex flex-row gap-1">
          {navLinks.map((link) => (
            <Pressable
              key={link.href}
              onPress={() => scrollTo(link.href)}
              className="nav-link px-4 py-2 rounded-lg"
            >
              <Text className="text-sm font-medium text-slate-500 hover:text-slate-900">
                {link.label}
              </Text>
            </Pressable>
          ))}
        </View>

        {/* Mobile hamburger */}
        <Pressable
          className="md:hidden w-10 h-10 rounded-lg bg-slate-100 items-center justify-center"
          onPress={() => setMenuOpen(!menuOpen)}
        >
          <Text className="text-lg text-slate-700">
            {menuOpen ? "\u2715" : "\u2630"}
          </Text>
        </Pressable>
      </View>

      {/* Mobile menu */}
      {menuOpen && (
        <View className="md:hidden bg-white/95 border-t border-gray-100 px-6 py-3">
          {navLinks.map((link) => (
            <Pressable
              key={link.href}
              onPress={() => scrollTo(link.href)}
              className="py-3.5 px-3 rounded-lg active:bg-slate-50"
            >
              <Text className="text-base font-medium text-slate-600">
                {link.label}
              </Text>
            </Pressable>
          ))}
        </View>
      )}
    </View>
  );
}
